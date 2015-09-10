<?php
/**
 * Class that operate on table 'oauth2_accesstoken'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class Oauth2AccesstokenMySqlDAO implements Oauth2AccesstokenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Oauth2AccesstokenMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM oauth2_accesstoken';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM oauth2_accesstoken ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param oauth2Accesstoken primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2AccesstokenMySql oauth2Accesstoken
 	 */
	public function insert($oauth2Accesstoken){
		$sql = 'INSERT INTO oauth2_accesstoken (user_id, token, client_id, expires, scope) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Accesstoken->userId);
		$sqlQuery->set($oauth2Accesstoken->token);
		$sqlQuery->setNumber($oauth2Accesstoken->clientId);
		$sqlQuery->set($oauth2Accesstoken->expires);
		$sqlQuery->setNumber($oauth2Accesstoken->scope);

		$id = $this->executeInsert($sqlQuery);	
		$oauth2Accesstoken->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2AccesstokenMySql oauth2Accesstoken
 	 */
	public function update($oauth2Accesstoken){
		$sql = 'UPDATE oauth2_accesstoken SET user_id = ?, token = ?, client_id = ?, expires = ?, scope = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Accesstoken->userId);
		$sqlQuery->set($oauth2Accesstoken->token);
		$sqlQuery->setNumber($oauth2Accesstoken->clientId);
		$sqlQuery->set($oauth2Accesstoken->expires);
		$sqlQuery->setNumber($oauth2Accesstoken->scope);

		$sqlQuery->setNumber($oauth2Accesstoken->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM oauth2_accesstoken';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByToken($value){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE token = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpires($value){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScope($value){
		$sql = 'SELECT * FROM oauth2_accesstoken WHERE scope = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByToken($value){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE token = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientId($value){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpires($value){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScope($value){
		$sql = 'DELETE FROM oauth2_accesstoken WHERE scope = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return Oauth2AccesstokenMySql 
	 */
	protected function readRow($row){
		$oauth2Accesstoken = new Oauth2Accesstoken();
		
		$oauth2Accesstoken->id = $row['id'];
		$oauth2Accesstoken->userId = $row['user_id'];
		$oauth2Accesstoken->token = $row['token'];
		$oauth2Accesstoken->clientId = $row['client_id'];
		$oauth2Accesstoken->expires = $row['expires'];
		$oauth2Accesstoken->scope = $row['scope'];

		return $oauth2Accesstoken;
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
	 * @return Oauth2AccesstokenMySql 
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