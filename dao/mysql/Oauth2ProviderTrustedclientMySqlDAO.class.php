<?php
/**
 * Class that operate on table 'oauth2_provider_trustedclient'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class Oauth2ProviderTrustedclientMySqlDAO implements Oauth2ProviderTrustedclientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Oauth2ProviderTrustedclientMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM oauth2_provider_trustedclient WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM oauth2_provider_trustedclient';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM oauth2_provider_trustedclient ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param oauth2ProviderTrustedclient primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM oauth2_provider_trustedclient WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2ProviderTrustedclientMySql oauth2ProviderTrustedclient
 	 */
	public function insert($oauth2ProviderTrustedclient){
		$sql = 'INSERT INTO oauth2_provider_trustedclient (client_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2ProviderTrustedclient->clientId);

		$id = $this->executeInsert($sqlQuery);	
		$oauth2ProviderTrustedclient->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2ProviderTrustedclientMySql oauth2ProviderTrustedclient
 	 */
	public function update($oauth2ProviderTrustedclient){
		$sql = 'UPDATE oauth2_provider_trustedclient SET client_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($oauth2ProviderTrustedclient->clientId);

		$sqlQuery->setNumber($oauth2ProviderTrustedclient->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM oauth2_provider_trustedclient';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByClientId($value){
		$sql = 'SELECT * FROM oauth2_provider_trustedclient WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByClientId($value){
		$sql = 'DELETE FROM oauth2_provider_trustedclient WHERE client_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return Oauth2ProviderTrustedclientMySql 
	 */
	protected function readRow($row){
		$oauth2ProviderTrustedclient = new Oauth2ProviderTrustedclient();
		
		$oauth2ProviderTrustedclient->id = $row['id'];
		$oauth2ProviderTrustedclient->clientId = $row['client_id'];

		return $oauth2ProviderTrustedclient;
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
	 * @return Oauth2ProviderTrustedclientMySql 
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