<?php
/**
 * Class that operate on table 'track_trackinglog'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class TrackTrackinglogMySqlDAO implements TrackTrackinglogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TrackTrackinglogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM track_trackinglog WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM track_trackinglog';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM track_trackinglog ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param trackTrackinglog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM track_trackinglog WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TrackTrackinglogMySql trackTrackinglog
 	 */
	public function insert($trackTrackinglog){
		$sql = 'INSERT INTO track_trackinglog (dtcreated, username, ip, event_source, event_type, event, agent, page, time, host) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($trackTrackinglog->dtcreated);
		$sqlQuery->set($trackTrackinglog->username);
		$sqlQuery->set($trackTrackinglog->ip);
		$sqlQuery->set($trackTrackinglog->eventSource);
		$sqlQuery->set($trackTrackinglog->eventType);
		$sqlQuery->set($trackTrackinglog->event);
		$sqlQuery->set($trackTrackinglog->agent);
		$sqlQuery->set($trackTrackinglog->page);
		$sqlQuery->set($trackTrackinglog->time);
		$sqlQuery->set($trackTrackinglog->host);

		$id = $this->executeInsert($sqlQuery);	
		$trackTrackinglog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TrackTrackinglogMySql trackTrackinglog
 	 */
	public function update($trackTrackinglog){
		$sql = 'UPDATE track_trackinglog SET dtcreated = ?, username = ?, ip = ?, event_source = ?, event_type = ?, event = ?, agent = ?, page = ?, time = ?, host = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($trackTrackinglog->dtcreated);
		$sqlQuery->set($trackTrackinglog->username);
		$sqlQuery->set($trackTrackinglog->ip);
		$sqlQuery->set($trackTrackinglog->eventSource);
		$sqlQuery->set($trackTrackinglog->eventType);
		$sqlQuery->set($trackTrackinglog->event);
		$sqlQuery->set($trackTrackinglog->agent);
		$sqlQuery->set($trackTrackinglog->page);
		$sqlQuery->set($trackTrackinglog->time);
		$sqlQuery->set($trackTrackinglog->host);

		$sqlQuery->setNumber($trackTrackinglog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM track_trackinglog';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDtcreated($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE dtcreated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUsername($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE username = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIp($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEventSource($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE event_source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEventType($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE event_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEvent($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAgent($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE agent = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPage($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE page = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTime($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHost($value){
		$sql = 'SELECT * FROM track_trackinglog WHERE host = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDtcreated($value){
		$sql = 'DELETE FROM track_trackinglog WHERE dtcreated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUsername($value){
		$sql = 'DELETE FROM track_trackinglog WHERE username = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIp($value){
		$sql = 'DELETE FROM track_trackinglog WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEventSource($value){
		$sql = 'DELETE FROM track_trackinglog WHERE event_source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEventType($value){
		$sql = 'DELETE FROM track_trackinglog WHERE event_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEvent($value){
		$sql = 'DELETE FROM track_trackinglog WHERE event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAgent($value){
		$sql = 'DELETE FROM track_trackinglog WHERE agent = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPage($value){
		$sql = 'DELETE FROM track_trackinglog WHERE page = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTime($value){
		$sql = 'DELETE FROM track_trackinglog WHERE time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHost($value){
		$sql = 'DELETE FROM track_trackinglog WHERE host = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TrackTrackinglogMySql 
	 */
	protected function readRow($row){
		$trackTrackinglog = new TrackTrackinglog();
		
		$trackTrackinglog->id = $row['id'];
		$trackTrackinglog->dtcreated = $row['dtcreated'];
		$trackTrackinglog->username = $row['username'];
		$trackTrackinglog->ip = $row['ip'];
		$trackTrackinglog->eventSource = $row['event_source'];
		$trackTrackinglog->eventType = $row['event_type'];
		$trackTrackinglog->event = $row['event'];
		$trackTrackinglog->agent = $row['agent'];
		$trackTrackinglog->page = $row['page'];
		$trackTrackinglog->time = $row['time'];
		$trackTrackinglog->host = $row['host'];

		return $trackTrackinglog;
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
	 * @return TrackTrackinglogMySql 
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