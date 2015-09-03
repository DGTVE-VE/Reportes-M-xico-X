<?php
/**
 * Class that operate on table 'oauth2_refreshtoken'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class Oauth2RefreshtokenMySqlDAO implements Oauth2RefreshtokenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Oauth2RefreshtokenMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM oauth2_refreshtoken';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM oauth2_refreshtoken ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param oauth2Refreshtoken primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2RefreshtokenMySql oauth2Refreshtoken
 	 */
	public function insert($oauth2Refreshtoken){
		$sql = 'INSERT INTO oauth2_refreshtoken (user_id, token, access_token_id, client_id, expired) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Refreshtoken->userId);
		$sqlQuery->set($oauth2Refreshtoken->token);
		$sqlQuery->setNumber($oauth2Refreshtoken->accessTokenId);
		$sqlQuery->setNumber($oauth2Refreshtoken->clientId);
		$sqlQuery->setNumber($oauth2Refreshtoken->expired);

		$id = $this->executeInsert($sqlQuery);	
		$oauth2Refreshtoken->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2RefreshtokenMySql oauth2Refreshtoken
 	 */
	public function update($oauth2Refreshtoken){
		$sql = 'UPDATE oauth2_refreshtoken SET user_id = ?, token = ?, access_token_id = ?, client_id = ?, expired = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Refreshtoken->userId);
		$sqlQuery->set($oauth2Refreshtoken->token);
		$sqlQuery->setNumber($oauth2Refreshtoken->accessTokenId);
		$sqlQuery->setNumber($oauth2Refreshtoken->clientId);
		$sqlQuery->setNumber($oauth2Refreshtoken->expired);

		$sqlQuery->setNumber($oauth2Refreshtoken->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM oauth2_refreshtoken';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByToken($value){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE token = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccessTokenId($value){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE access_token_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpired($value){
		$sql = 'SELECT * FROM oauth2_refreshtoken WHERE expired = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByToken($value){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE token = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccessTokenId($value){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE access_token_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientId($value){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpired($value){
		$sql = 'DELETE FROM oauth2_refreshtoken WHERE expired = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return Oauth2RefreshtokenMySql 
	 */
	protected function readRow($row){
		$oauth2Refreshtoken = new Oauth2Refreshtoken();
		
		$oauth2Refreshtoken->id = $row['id'];
		$oauth2Refreshtoken->userId = $row['user_id'];
		$oauth2Refreshtoken->token = $row['token'];
		$oauth2Refreshtoken->accessTokenId = $row['access_token_id'];
		$oauth2Refreshtoken->clientId = $row['client_id'];
		$oauth2Refreshtoken->expired = $row['expired'];

		return $oauth2Refreshtoken;
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
	 * @return Oauth2RefreshtokenMySql 
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