<?php
/**
 * Class that operate on table 'auth_user_user_permissions'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AuthUserUserPermissionsMySqlDAO implements AuthUserUserPermissionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuthUserUserPermissionsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auth_user_user_permissions WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auth_user_user_permissions';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auth_user_user_permissions ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param authUserUserPermission primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM auth_user_user_permissions WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserUserPermissionsMySql authUserUserPermission
 	 */
	public function insert($authUserUserPermission){
		$sql = 'INSERT INTO auth_user_user_permissions (user_id, permission_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authUserUserPermission->userId);
		$sqlQuery->setNumber($authUserUserPermission->permissionId);

		$id = $this->executeInsert($sqlQuery);	
		$authUserUserPermission->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserUserPermissionsMySql authUserUserPermission
 	 */
	public function update($authUserUserPermission){
		$sql = 'UPDATE auth_user_user_permissions SET user_id = ?, permission_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authUserUserPermission->userId);
		$sqlQuery->setNumber($authUserUserPermission->permissionId);

		$sqlQuery->setNumber($authUserUserPermission->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auth_user_user_permissions';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM auth_user_user_permissions WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPermissionId($value){
		$sql = 'SELECT * FROM auth_user_user_permissions WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM auth_user_user_permissions WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPermissionId($value){
		$sql = 'DELETE FROM auth_user_user_permissions WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuthUserUserPermissionsMySql 
	 */
	protected function readRow($row){
		$authUserUserPermission = new AuthUserUserPermission();
		
		$authUserUserPermission->id = $row['id'];
		$authUserUserPermission->userId = $row['user_id'];
		$authUserUserPermission->permissionId = $row['permission_id'];

		return $authUserUserPermission;
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
	 * @return AuthUserUserPermissionsMySql 
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