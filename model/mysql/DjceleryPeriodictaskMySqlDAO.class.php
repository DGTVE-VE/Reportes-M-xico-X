<?php
/**
 * Class that operate on table 'djcelery_periodictask'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryPeriodictaskMySqlDAO implements DjceleryPeriodictaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryPeriodictaskMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_periodictask';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_periodictask ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryPeriodictask primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM djcelery_periodictask WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryPeriodictaskMySql djceleryPeriodictask
 	 */
	public function insert($djceleryPeriodictask){
		$sql = 'INSERT INTO djcelery_periodictask (name, task, interval_id, crontab_id, args, kwargs, queue, exchange, routing_key, expires, enabled, last_run_at, total_run_count, date_changed, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryPeriodictask->name);
		$sqlQuery->set($djceleryPeriodictask->task);
		$sqlQuery->setNumber($djceleryPeriodictask->intervalId);
		$sqlQuery->setNumber($djceleryPeriodictask->crontabId);
		$sqlQuery->set($djceleryPeriodictask->args);
		$sqlQuery->set($djceleryPeriodictask->kwargs);
		$sqlQuery->set($djceleryPeriodictask->queue);
		$sqlQuery->set($djceleryPeriodictask->exchange);
		$sqlQuery->set($djceleryPeriodictask->routingKey);
		$sqlQuery->set($djceleryPeriodictask->expires);
		$sqlQuery->setNumber($djceleryPeriodictask->enabled);
		$sqlQuery->set($djceleryPeriodictask->lastRunAt);
		$sqlQuery->setNumber($djceleryPeriodictask->totalRunCount);
		$sqlQuery->set($djceleryPeriodictask->dateChanged);
		$sqlQuery->set($djceleryPeriodictask->description);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryPeriodictask->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryPeriodictaskMySql djceleryPeriodictask
 	 */
	public function update($djceleryPeriodictask){
		$sql = 'UPDATE djcelery_periodictask SET name = ?, task = ?, interval_id = ?, crontab_id = ?, args = ?, kwargs = ?, queue = ?, exchange = ?, routing_key = ?, expires = ?, enabled = ?, last_run_at = ?, total_run_count = ?, date_changed = ?, description = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryPeriodictask->name);
		$sqlQuery->set($djceleryPeriodictask->task);
		$sqlQuery->setNumber($djceleryPeriodictask->intervalId);
		$sqlQuery->setNumber($djceleryPeriodictask->crontabId);
		$sqlQuery->set($djceleryPeriodictask->args);
		$sqlQuery->set($djceleryPeriodictask->kwargs);
		$sqlQuery->set($djceleryPeriodictask->queue);
		$sqlQuery->set($djceleryPeriodictask->exchange);
		$sqlQuery->set($djceleryPeriodictask->routingKey);
		$sqlQuery->set($djceleryPeriodictask->expires);
		$sqlQuery->setNumber($djceleryPeriodictask->enabled);
		$sqlQuery->set($djceleryPeriodictask->lastRunAt);
		$sqlQuery->setNumber($djceleryPeriodictask->totalRunCount);
		$sqlQuery->set($djceleryPeriodictask->dateChanged);
		$sqlQuery->set($djceleryPeriodictask->description);

		$sqlQuery->setNumber($djceleryPeriodictask->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_periodictask';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTask($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE task = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIntervalId($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE interval_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCrontabId($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE crontab_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArgs($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE args = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKwargs($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE kwargs = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQueue($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE queue = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExchange($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE exchange = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRoutingKey($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE routing_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpires($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastRunAt($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE last_run_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTotalRunCount($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE total_run_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateChanged($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE date_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM djcelery_periodictask WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTask($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE task = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIntervalId($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE interval_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCrontabId($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE crontab_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArgs($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE args = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKwargs($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE kwargs = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQueue($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE queue = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExchange($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE exchange = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRoutingKey($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE routing_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpires($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastRunAt($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE last_run_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTotalRunCount($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE total_run_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateChanged($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE date_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM djcelery_periodictask WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryPeriodictaskMySql 
	 */
	protected function readRow($row){
		$djceleryPeriodictask = new DjceleryPeriodictask();
		
		$djceleryPeriodictask->id = $row['id'];
		$djceleryPeriodictask->name = $row['name'];
		$djceleryPeriodictask->task = $row['task'];
		$djceleryPeriodictask->intervalId = $row['interval_id'];
		$djceleryPeriodictask->crontabId = $row['crontab_id'];
		$djceleryPeriodictask->args = $row['args'];
		$djceleryPeriodictask->kwargs = $row['kwargs'];
		$djceleryPeriodictask->queue = $row['queue'];
		$djceleryPeriodictask->exchange = $row['exchange'];
		$djceleryPeriodictask->routingKey = $row['routing_key'];
		$djceleryPeriodictask->expires = $row['expires'];
		$djceleryPeriodictask->enabled = $row['enabled'];
		$djceleryPeriodictask->lastRunAt = $row['last_run_at'];
		$djceleryPeriodictask->totalRunCount = $row['total_run_count'];
		$djceleryPeriodictask->dateChanged = $row['date_changed'];
		$djceleryPeriodictask->description = $row['description'];

		return $djceleryPeriodictask;
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
	 * @return DjceleryPeriodictaskMySql 
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