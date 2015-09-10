<?php
/**
 * Class that operate on table 'django_openid_auth_nonce'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoOpenidAuthNonceMySqlDAO implements DjangoOpenidAuthNonceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoOpenidAuthNonceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_openid_auth_nonce WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_openid_auth_nonce';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_openid_auth_nonce ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoOpenidAuthNonce primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_openid_auth_nonce WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoOpenidAuthNonceMySql djangoOpenidAuthNonce
 	 */
	public function insert($djangoOpenidAuthNonce){
		$sql = 'INSERT INTO django_openid_auth_nonce (server_url, timestamp, salt) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoOpenidAuthNonce->serverUrl);
		$sqlQuery->setNumber($djangoOpenidAuthNonce->timestamp);
		$sqlQuery->set($djangoOpenidAuthNonce->salt);

		$id = $this->executeInsert($sqlQuery);	
		$djangoOpenidAuthNonce->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoOpenidAuthNonceMySql djangoOpenidAuthNonce
 	 */
	public function update($djangoOpenidAuthNonce){
		$sql = 'UPDATE django_openid_auth_nonce SET server_url = ?, timestamp = ?, salt = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoOpenidAuthNonce->serverUrl);
		$sqlQuery->setNumber($djangoOpenidAuthNonce->timestamp);
		$sqlQuery->set($djangoOpenidAuthNonce->salt);

		$sqlQuery->setNumber($djangoOpenidAuthNonce->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_openid_auth_nonce';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByServerUrl($value){
		$sql = 'SELECT * FROM django_openid_auth_nonce WHERE server_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimestamp($value){
		$sql = 'SELECT * FROM django_openid_auth_nonce WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySalt($value){
		$sql = 'SELECT * FROM django_openid_auth_nonce WHERE salt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByServerUrl($value){
		$sql = 'DELETE FROM django_openid_auth_nonce WHERE server_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimestamp($value){
		$sql = 'DELETE FROM django_openid_auth_nonce WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySalt($value){
		$sql = 'DELETE FROM django_openid_auth_nonce WHERE salt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoOpenidAuthNonceMySql 
	 */
	protected function readRow($row){
		$djangoOpenidAuthNonce = new DjangoOpenidAuthNonce();
		
		$djangoOpenidAuthNonce->id = $row['id'];
		$djangoOpenidAuthNonce->serverUrl = $row['server_url'];
		$djangoOpenidAuthNonce->timestamp = $row['timestamp'];
		$djangoOpenidAuthNonce->salt = $row['salt'];

		return $djangoOpenidAuthNonce;
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
	 * @return DjangoOpenidAuthNonceMySql 
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