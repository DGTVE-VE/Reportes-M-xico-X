<?php
/**
 * Class that operate on table 'oauth2_client'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class Oauth2ClientMySqlDAO implements Oauth2ClientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Oauth2ClientMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM oauth2_client WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM oauth2_client';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM oauth2_client ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param oauth2Client primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM oauth2_client WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2ClientMySql oauth2Client
 	 */
	public function insert($oauth2Client){
		$sql = 'INSERT INTO oauth2_client (user_id, url, redirect_uri, client_id, client_secret, client_type, name) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Client->userId);
		$sqlQuery->set($oauth2Client->url);
		$sqlQuery->set($oauth2Client->redirectUri);
		$sqlQuery->set($oauth2Client->clientId);
		$sqlQuery->set($oauth2Client->clientSecret);
		$sqlQuery->setNumber($oauth2Client->clientType);
		$sqlQuery->set($oauth2Client->name);

		$id = $this->executeInsert($sqlQuery);	
		$oauth2Client->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2ClientMySql oauth2Client
 	 */
	public function update($oauth2Client){
		$sql = 'UPDATE oauth2_client SET user_id = ?, url = ?, redirect_uri = ?, client_id = ?, client_secret = ?, client_type = ?, name = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Client->userId);
		$sqlQuery->set($oauth2Client->url);
		$sqlQuery->set($oauth2Client->redirectUri);
		$sqlQuery->set($oauth2Client->clientId);
		$sqlQuery->set($oauth2Client->clientSecret);
		$sqlQuery->setNumber($oauth2Client->clientType);
		$sqlQuery->set($oauth2Client->name);

		$sqlQuery->setNumber($oauth2Client->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM oauth2_client';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM oauth2_client WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM oauth2_client WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRedirectUri($value){
		$sql = 'SELECT * FROM oauth2_client WHERE redirect_uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM oauth2_client WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientSecret($value){
		$sql = 'SELECT * FROM oauth2_client WHERE client_secret = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientType($value){
		$sql = 'SELECT * FROM oauth2_client WHERE client_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM oauth2_client WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM oauth2_client WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM oauth2_client WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRedirectUri($value){
		$sql = 'DELETE FROM oauth2_client WHERE redirect_uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientId($value){
		$sql = 'DELETE FROM oauth2_client WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientSecret($value){
		$sql = 'DELETE FROM oauth2_client WHERE client_secret = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientType($value){
		$sql = 'DELETE FROM oauth2_client WHERE client_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM oauth2_client WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return Oauth2ClientMySql 
	 */
	protected function readRow($row){
		$oauth2Client = new Oauth2Client();
		
		$oauth2Client->id = $row['id'];
		$oauth2Client->userId = $row['user_id'];
		$oauth2Client->url = $row['url'];
		$oauth2Client->redirectUri = $row['redirect_uri'];
		$oauth2Client->clientId = $row['client_id'];
		$oauth2Client->clientSecret = $row['client_secret'];
		$oauth2Client->clientType = $row['client_type'];
		$oauth2Client->name = $row['name'];

		return $oauth2Client;
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
	 * @return Oauth2ClientMySql 
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