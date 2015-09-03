<?php
/**
 * Class that operate on table 'django_comment_client_role_users'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoCommentClientRoleUsersMySqlDAO implements DjangoCommentClientRoleUsersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoCommentClientRoleUsersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_comment_client_role_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_comment_client_role_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_comment_client_role_users ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoCommentClientRoleUser primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_comment_client_role_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientRoleUsersMySql djangoCommentClientRoleUser
 	 */
	public function insert($djangoCommentClientRoleUser){
		$sql = 'INSERT INTO django_comment_client_role_users (role_id, user_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djangoCommentClientRoleUser->roleId);
		$sqlQuery->setNumber($djangoCommentClientRoleUser->userId);

		$id = $this->executeInsert($sqlQuery);	
		$djangoCommentClientRoleUser->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientRoleUsersMySql djangoCommentClientRoleUser
 	 */
	public function update($djangoCommentClientRoleUser){
		$sql = 'UPDATE django_comment_client_role_users SET role_id = ?, user_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djangoCommentClientRoleUser->roleId);
		$sqlQuery->setNumber($djangoCommentClientRoleUser->userId);

		$sqlQuery->setNumber($djangoCommentClientRoleUser->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_comment_client_role_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRoleId($value){
		$sql = 'SELECT * FROM django_comment_client_role_users WHERE role_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM django_comment_client_role_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRoleId($value){
		$sql = 'DELETE FROM django_comment_client_role_users WHERE role_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM django_comment_client_role_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoCommentClientRoleUsersMySql 
	 */
	protected function readRow($row){
		$djangoCommentClientRoleUser = new DjangoCommentClientRoleUser();
		
		$djangoCommentClientRoleUser->id = $row['id'];
		$djangoCommentClientRoleUser->roleId = $row['role_id'];
		$djangoCommentClientRoleUser->userId = $row['user_id'];

		return $djangoCommentClientRoleUser;
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
	 * @return DjangoCommentClientRoleUsersMySql 
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