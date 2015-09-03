<?php
/**
 * Class that operate on table 'djcelery_taskstate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryTaskstateMySqlDAO implements DjceleryTaskstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryTaskstateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_taskstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_taskstate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryTaskstate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM djcelery_taskstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryTaskstateMySql djceleryTaskstate
 	 */
	public function insert($djceleryTaskstate){
		$sql = 'INSERT INTO djcelery_taskstate (state, task_id, name, tstamp, args, kwargs, eta, expires, result, traceback, runtime, retries, worker_id, hidden) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryTaskstate->state);
		$sqlQuery->set($djceleryTaskstate->taskId);
		$sqlQuery->set($djceleryTaskstate->name);
		$sqlQuery->set($djceleryTaskstate->tstamp);
		$sqlQuery->set($djceleryTaskstate->args);
		$sqlQuery->set($djceleryTaskstate->kwargs);
		$sqlQuery->set($djceleryTaskstate->eta);
		$sqlQuery->set($djceleryTaskstate->expires);
		$sqlQuery->set($djceleryTaskstate->result);
		$sqlQuery->set($djceleryTaskstate->traceback);
		$sqlQuery->set($djceleryTaskstate->runtime);
		$sqlQuery->setNumber($djceleryTaskstate->retries);
		$sqlQuery->setNumber($djceleryTaskstate->workerId);
		$sqlQuery->setNumber($djceleryTaskstate->hidden);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryTaskstate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryTaskstateMySql djceleryTaskstate
 	 */
	public function update($djceleryTaskstate){
		$sql = 'UPDATE djcelery_taskstate SET state = ?, task_id = ?, name = ?, tstamp = ?, args = ?, kwargs = ?, eta = ?, expires = ?, result = ?, traceback = ?, runtime = ?, retries = ?, worker_id = ?, hidden = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryTaskstate->state);
		$sqlQuery->set($djceleryTaskstate->taskId);
		$sqlQuery->set($djceleryTaskstate->name);
		$sqlQuery->set($djceleryTaskstate->tstamp);
		$sqlQuery->set($djceleryTaskstate->args);
		$sqlQuery->set($djceleryTaskstate->kwargs);
		$sqlQuery->set($djceleryTaskstate->eta);
		$sqlQuery->set($djceleryTaskstate->expires);
		$sqlQuery->set($djceleryTaskstate->result);
		$sqlQuery->set($djceleryTaskstate->traceback);
		$sqlQuery->set($djceleryTaskstate->runtime);
		$sqlQuery->setNumber($djceleryTaskstate->retries);
		$sqlQuery->setNumber($djceleryTaskstate->workerId);
		$sqlQuery->setNumber($djceleryTaskstate->hidden);

		$sqlQuery->setNumber($djceleryTaskstate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_taskstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskId($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTstamp($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE tstamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArgs($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE args = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKwargs($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE kwargs = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEta($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE eta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpires($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByResult($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTraceback($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE traceback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRuntime($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE runtime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRetries($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE retries = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWorkerId($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE worker_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHidden($value){
		$sql = 'SELECT * FROM djcelery_taskstate WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByState($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskId($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTstamp($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE tstamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArgs($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE args = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKwargs($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE kwargs = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEta($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE eta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpires($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE expires = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByResult($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTraceback($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE traceback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRuntime($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE runtime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRetries($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE retries = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWorkerId($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE worker_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHidden($value){
		$sql = 'DELETE FROM djcelery_taskstate WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryTaskstateMySql 
	 */
	protected function readRow($row){
		$djceleryTaskstate = new DjceleryTaskstate();
		
		$djceleryTaskstate->id = $row['id'];
		$djceleryTaskstate->state = $row['state'];
		$djceleryTaskstate->taskId = $row['task_id'];
		$djceleryTaskstate->name = $row['name'];
		$djceleryTaskstate->tstamp = $row['tstamp'];
		$djceleryTaskstate->args = $row['args'];
		$djceleryTaskstate->kwargs = $row['kwargs'];
		$djceleryTaskstate->eta = $row['eta'];
		$djceleryTaskstate->expires = $row['expires'];
		$djceleryTaskstate->result = $row['result'];
		$djceleryTaskstate->traceback = $row['traceback'];
		$djceleryTaskstate->runtime = $row['runtime'];
		$djceleryTaskstate->retries = $row['retries'];
		$djceleryTaskstate->workerId = $row['worker_id'];
		$djceleryTaskstate->hidden = $row['hidden'];

		return $djceleryTaskstate;
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
	 * @return DjceleryTaskstateMySql 
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