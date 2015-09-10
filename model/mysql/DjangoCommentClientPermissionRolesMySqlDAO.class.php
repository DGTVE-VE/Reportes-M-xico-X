<?php
/**
 * Class that operate on table 'django_comment_client_permission_roles'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoCommentClientPermissionRolesMySqlDAO implements DjangoCommentClientPermissionRolesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoCommentClientPermissionRolesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_comment_client_permission_roles WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_comment_client_permission_roles';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_comment_client_permission_roles ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoCommentClientPermissionRole primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_comment_client_permission_roles WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientPermissionRolesMySql djangoCommentClientPermissionRole
 	 */
	public function insert($djangoCommentClientPermissionRole){
		$sql = 'INSERT INTO django_comment_client_permission_roles (permission_id, role_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoCommentClientPermissionRole->permissionId);
		$sqlQuery->setNumber($djangoCommentClientPermissionRole->roleId);

		$id = $this->executeInsert($sqlQuery);	
		$djangoCommentClientPermissionRole->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientPermissionRolesMySql djangoCommentClientPermissionRole
 	 */
	public function update($djangoCommentClientPermissionRole){
		$sql = 'UPDATE django_comment_client_permission_roles SET permission_id = ?, role_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoCommentClientPermissionRole->permissionId);
		$sqlQuery->setNumber($djangoCommentClientPermissionRole->roleId);

		$sqlQuery->setNumber($djangoCommentClientPermissionRole->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_comment_client_permission_roles';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPermissionId($value){
		$sql = 'SELECT * FROM django_comment_client_permission_roles WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRoleId($value){
		$sql = 'SELECT * FROM django_comment_client_permission_roles WHERE role_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPermissionId($value){
		$sql = 'DELETE FROM django_comment_client_permission_roles WHERE permission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRoleId($value){
		$sql = 'DELETE FROM django_comment_client_permission_roles WHERE role_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoCommentClientPermissionRolesMySql 
	 */
	protected function readRow($row){
		$djangoCommentClientPermissionRole = new DjangoCommentClientPermissionRole();
		
		$djangoCommentClientPermissionRole->id = $row['id'];
		$djangoCommentClientPermissionRole->permissionId = $row['permission_id'];
		$djangoCommentClientPermissionRole->roleId = $row['role_id'];

		return $djangoCommentClientPermissionRole;
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
	 * @return DjangoCommentClientPermissionRolesMySql 
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