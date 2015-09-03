<?php
/**
 * Class that operate on table 'auth_group_permissions'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AuthGroupPermissionsMySqlDAO implements AuthGroupPermissionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuthGroupPermissionsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auth_group_permissions WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auth_group_permissions';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auth_group_permissions ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param authGroupPermission primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM auth_group_permissions WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthGroupPermissionsMySql authGroupPermission
 	 */
	public function insert($authGroupPermission){
		$sql = 'INSERT INTO auth_group_permissions (group_id, permission_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authGroupPermission->groupId);
		$sqlQuery->setNumber($authGroupPermission->permissionId);

		$id = $this->executeInsert($sqlQuery);	
		$authGroupPermission->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthGroupPermissionsMySql authGroupPermission
 	 */
	public function update($authGroupPermission){
		$sql = 'UPDATE auth_group_permissions SET group_id = ?, permission_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authGroupPermission->groupId);
		$sqlQuery->setNumber($authGroupPermission->permissionId);

		$sqlQuery->setNumber($authGroupPermission->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auth_group_permissions';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByGroupId($value){
		$sql = 'SELECT * FROM auth_group_permissions WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPermissionId($value){
		$sql = 'SELECT * FROM auth_group_permissions WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByGroupId($value){
		$sql = 'DELETE FROM auth_group_permissions WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPermissionId($value){
		$sql = 'DELETE FROM auth_group_permissions WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuthGroupPermissionsMySql 
	 */
	protected function readRow($row){
		$authGroupPermission = new AuthGroupPermission();
		
		$authGroupPermission->id = $row['id'];
		$authGroupPermission->groupId = $row['group_id'];
		$authGroupPermission->permissionId = $row['permission_id'];

		return $authGroupPermission;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AuthGroupPermissionsMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>