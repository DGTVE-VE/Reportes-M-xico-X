<?php
/**
 * Class that operate on table 'djcelery_crontabschedule'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryCrontabscheduleMySqlDAO implements DjceleryCrontabscheduleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryCrontabscheduleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_crontabschedule';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_crontabschedule ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryCrontabschedule primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryCrontabscheduleMySql djceleryCrontabschedule
 	 */
	public function insert($djceleryCrontabschedule){
		$sql = 'INSERT INTO djcelery_crontabschedule (minute, hour, day_of_week, day_of_month, month_of_year) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryCrontabschedule->minute);
		$sqlQuery->set($djceleryCrontabschedule->hour);
		$sqlQuery->set($djceleryCrontabschedule->dayOfWeek);
		$sqlQuery->set($djceleryCrontabschedule->dayOfMonth);
		$sqlQuery->set($djceleryCrontabschedule->monthOfYear);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryCrontabschedule->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryCrontabscheduleMySql djceleryCrontabschedule
 	 */
	public function update($djceleryCrontabschedule){
		$sql = 'UPDATE djcelery_crontabschedule SET minute = ?, hour = ?, day_of_week = ?, day_of_month = ?, month_of_year = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryCrontabschedule->minute);
		$sqlQuery->set($djceleryCrontabschedule->hour);
		$sqlQuery->set($djceleryCrontabschedule->dayOfWeek);
		$sqlQuery->set($djceleryCrontabschedule->dayOfMonth);
		$sqlQuery->set($djceleryCrontabschedule->monthOfYear);

		$sqlQuery->setNumber($djceleryCrontabschedule->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_crontabschedule';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMinute($value){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE minute = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHour($value){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDayOfWeek($value){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE day_of_week = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDayOfMonth($value){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE day_of_month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMonthOfYear($value){
		$sql = 'SELECT * FROM djcelery_crontabschedule WHERE month_of_year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMinute($value){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE minute = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHour($value){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE hour = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDayOfWeek($value){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE day_of_week = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDayOfMonth($value){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE day_of_month = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMonthOfYear($value){
		$sql = 'DELETE FROM djcelery_crontabschedule WHERE month_of_year = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryCrontabscheduleMySql 
	 */
	protected function readRow($row){
		$djceleryCrontabschedule = new DjceleryCrontabschedule();
		
		$djceleryCrontabschedule->id = $row['id'];
		$djceleryCrontabschedule->minute = $row['minute'];
		$djceleryCrontabschedule->hour = $row['hour'];
		$djceleryCrontabschedule->dayOfWeek = $row['day_of_week'];
		$djceleryCrontabschedule->dayOfMonth = $row['day_of_month'];
		$djceleryCrontabschedule->monthOfYear = $row['month_of_year'];

		return $djceleryCrontabschedule;
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
	 * @return DjceleryCrontabscheduleMySql 
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