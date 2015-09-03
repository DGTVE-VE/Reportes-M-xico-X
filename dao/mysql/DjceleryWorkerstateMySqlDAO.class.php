<?php
/**
 * Class that operate on table 'djcelery_workerstate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryWorkerstateMySqlDAO implements DjceleryWorkerstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryWorkerstateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_workerstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_workerstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_workerstate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryWorkerstate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM djcelery_workerstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryWorkerstateMySql djceleryWorkerstate
 	 */
	public function insert($djceleryWorkerstate){
		$sql = 'INSERT INTO djcelery_workerstate (hostname, last_heartbeat) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryWorkerstate->hostname);
		$sqlQuery->set($djceleryWorkerstate->lastHeartbeat);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryWorkerstate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryWorkerstateMySql djceleryWorkerstate
 	 */
	public function update($djceleryWorkerstate){
		$sql = 'UPDATE djcelery_workerstate SET hostname = ?, last_heartbeat = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryWorkerstate->hostname);
		$sqlQuery->set($djceleryWorkerstate->lastHeartbeat);

		$sqlQuery->setNumber($djceleryWorkerstate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_workerstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByHostname($value){
		$sql = 'SELECT * FROM djcelery_workerstate WHERE hostname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastHeartbeat($value){
		$sql = 'SELECT * FROM djcelery_workerstate WHERE last_heartbeat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByHostname($value){
		$sql = 'DELETE FROM djcelery_workerstate WHERE hostname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastHeartbeat($value){
		$sql = 'DELETE FROM djcelery_workerstate WHERE last_heartbeat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryWorkerstateMySql 
	 */
	protected function readRow($row){
		$djceleryWorkerstate = new DjceleryWorkerstate();
		
		$djceleryWorkerstate->id = $row['id'];
		$djceleryWorkerstate->hostname = $row['hostname'];
		$djceleryWorkerstate->lastHeartbeat = $row['last_heartbeat'];

		return $djceleryWorkerstate;
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
	 * @return DjceleryWorkerstateMySql 
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