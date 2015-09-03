<?php
/**
 * Class that operate on table 'django_openid_auth_useropenid'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoOpenidAuthUseropenidMySqlDAO implements DjangoOpenidAuthUseropenidDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoOpenidAuthUseropenidMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_openid_auth_useropenid WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_openid_auth_useropenid';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_openid_auth_useropenid ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoOpenidAuthUseropenid primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_openid_auth_useropenid WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoOpenidAuthUseropenidMySql djangoOpenidAuthUseropenid
 	 */
	public function insert($djangoOpenidAuthUseropenid){
		$sql = 'INSERT INTO django_openid_auth_useropenid (user_id, claimed_id, display_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djangoOpenidAuthUseropenid->userId);
		$sqlQuery->set($djangoOpenidAuthUseropenid->claimedId);
		$sqlQuery->set($djangoOpenidAuthUseropenid->displayId);

		$id = $this->executeInsert($sqlQuery);	
		$djangoOpenidAuthUseropenid->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoOpenidAuthUseropenidMySql djangoOpenidAuthUseropenid
 	 */
	public function update($djangoOpenidAuthUseropenid){
		$sql = 'UPDATE django_openid_auth_useropenid SET user_id = ?, claimed_id = ?, display_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djangoOpenidAuthUseropenid->userId);
		$sqlQuery->set($djangoOpenidAuthUseropenid->claimedId);
		$sqlQuery->set($djangoOpenidAuthUseropenid->displayId);

		$sqlQuery->setNumber($djangoOpenidAuthUseropenid->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_openid_auth_useropenid';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM django_openid_auth_useropenid WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClaimedId($value){
		$sql = 'SELECT * FROM django_openid_auth_useropenid WHERE claimed_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisplayId($value){
		$sql = 'SELECT * FROM django_openid_auth_useropenid WHERE display_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM django_openid_auth_useropenid WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClaimedId($value){
		$sql = 'DELETE FROM django_openid_auth_useropenid WHERE claimed_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisplayId($value){
		$sql = 'DELETE FROM django_openid_auth_useropenid WHERE display_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoOpenidAuthUseropenidMySql 
	 */
	protected function readRow($row){
		$djangoOpenidAuthUseropenid = new DjangoOpenidAuthUseropenid();
		
		$djangoOpenidAuthUseropenid->id = $row['id'];
		$djangoOpenidAuthUseropenid->userId = $row['user_id'];
		$djangoOpenidAuthUseropenid->claimedId = $row['claimed_id'];
		$djangoOpenidAuthUseropenid->displayId = $row['display_id'];

		return $djangoOpenidAuthUseropenid;
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
	 * @return DjangoOpenidAuthUseropenidMySql 
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