<?php
/**
 * Class that operate on table 'oauth2_grant'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class Oauth2GrantMySqlDAO implements Oauth2GrantDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Oauth2GrantMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM oauth2_grant WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM oauth2_grant';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM oauth2_grant ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param oauth2Grant primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM oauth2_grant WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2GrantMySql oauth2Grant
 	 */
	public function insert($oauth2Grant){
		$sql = 'INSERT INTO oauth2_grant (user_id, client_id, code, expires, redirect_uri, scope) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Grant->userId);
		$sqlQuery->setNumber($oauth2Grant->clientId);
		$sqlQuery->set($oauth2Grant->code);
		$sqlQuery->set($oauth2Grant->expires);
		$sqlQuery->set($oauth2Grant->redirectUri);
		$sqlQuery->setNumber($oauth2Grant->scope);

		$id = $this->executeInsert($sqlQuery);	
		$oauth2Grant->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2GrantMySql oauth2Grant
 	 */
	public function update($oauth2Grant){
		$sql = 'UPDATE oauth2_grant SET user_id = ?, client_id = ?, code = ?, expires = ?, redirect_uri = ?, scope = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2Grant->userId);
		$sqlQuery->setNumber($oauth2Grant->clientId);
		$sqlQuery->set($oauth2Grant->code);
		$sqlQuery->set($oauth2Grant->expires);
		$sqlQuery->set($oauth2Grant->redirectUri);
		$sqlQuery->setNumber($oauth2Grant->scope);

		$sqlQuery->setNumber($oauth2Grant->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM oauth2_grant';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCode($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpires($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRedirectUri($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE redirect_uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScope($value){
		$sql = 'SELECT * FROM oauth2_grant WHERE scope = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM oauth2_grant WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientId($value){
		$sql = 'DELETE FROM oauth2_grant WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCode($value){
		$sql = 'DELETE FROM oauth2_grant WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpires($value){
		$sql = 'DELETE FROM oauth2_grant WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRedirectUri($value){
		$sql = 'DELETE FROM oauth2_grant WHERE redirect_uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScope($value){
		$sql = 'DELETE FROM oauth2_grant WHERE scope = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return Oauth2GrantMySql 
	 */
	protected function readRow($row){
		$oauth2Grant = new Oauth2Grant();
		
		$oauth2Grant->id = $row['id'];
		$oauth2Grant->userId = $row['user_id'];
		$oauth2Grant->clientId = $row['client_id'];
		$oauth2Grant->code = $row['code'];
		$oauth2Grant->expires = $row['expires'];
		$oauth2Grant->redirectUri = $row['redirect_uri'];
		$oauth2Grant->scope = $row['scope'];

		return $oauth2Grant;
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
	 * @return Oauth2GrantMySql 
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