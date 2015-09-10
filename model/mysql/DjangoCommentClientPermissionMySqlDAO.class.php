<?php
/**
 * Class that operate on table 'django_comment_client_permission'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoCommentClientPermissionMySqlDAO implements DjangoCommentClientPermissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoCommentClientPermissionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_comment_client_permission WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_comment_client_permission';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_comment_client_permission ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoCommentClientPermission primary key
 	 */
	public function delete($name){
		$sql = 'DELETE FROM django_comment_client_permission WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($name);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientPermissionMySql djangoCommentClientPermission
 	 */
	public function insert($djangoCommentClientPermission){
		$sql = 'INSERT INTO django_comment_client_permission () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$djangoCommentClientPermission->name = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientPermissionMySql djangoCommentClientPermission
 	 */
	public function update($djangoCommentClientPermission){
		$sql = 'UPDATE django_comment_client_permission SET  WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->set($djangoCommentClientPermission->name);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_comment_client_permission';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return DjangoCommentClientPermissionMySql 
	 */
	protected function readRow($row){
		$djangoCommentClientPermission = new DjangoCommentClientPermission();
		
		$djangoCommentClientPermission->name = $row['name'];

		return $djangoCommentClientPermission;
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
	 * @return DjangoCommentClientPermissionMySql 
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