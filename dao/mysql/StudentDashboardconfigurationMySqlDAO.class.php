<?php
/**
 * Class that operate on table 'student_dashboardconfiguration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentDashboardconfigurationMySqlDAO implements StudentDashboardconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentDashboardconfigurationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_dashboardconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_dashboardconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_dashboardconfiguration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentDashboardconfiguration primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_dashboardconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentDashboardconfigurationMySql studentDashboardconfiguration
 	 */
	public function insert($studentDashboardconfiguration){
		$sql = 'INSERT INTO student_dashboardconfiguration (change_date, changed_by_id, enabled, recent_enrollment_time_delta) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentDashboardconfiguration->changeDate);
		$sqlQuery->setNumber($studentDashboardconfiguration->changedById);
		$sqlQuery->setNumber($studentDashboardconfiguration->enabled);
		$sqlQuery->setNumber($studentDashboardconfiguration->recentEnrollmentTimeDelta);

		$id = $this->executeInsert($sqlQuery);	
		$studentDashboardconfiguration->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentDashboardconfigurationMySql studentDashboardconfiguration
 	 */
	public function update($studentDashboardconfiguration){
		$sql = 'UPDATE student_dashboardconfiguration SET change_date = ?, changed_by_id = ?, enabled = ?, recent_enrollment_time_delta = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentDashboardconfiguration->changeDate);
		$sqlQuery->setNumber($studentDashboardconfiguration->changedById);
		$sqlQuery->setNumber($studentDashboardconfiguration->enabled);
		$sqlQuery->setNumber($studentDashboardconfiguration->recentEnrollmentTimeDelta);

		$sqlQuery->setNumber($studentDashboardconfiguration->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_dashboardconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM student_dashboardconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM student_dashboardconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM student_dashboardconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecentEnrollmentTimeDelta($value){
		$sql = 'SELECT * FROM student_dashboardconfiguration WHERE recent_enrollment_time_delta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM student_dashboardconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM student_dashboardconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM student_dashboardconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecentEnrollmentTimeDelta($value){
		$sql = 'DELETE FROM student_dashboardconfiguration WHERE recent_enrollment_time_delta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentDashboardconfigurationMySql 
	 */
	protected function readRow($row){
		$studentDashboardconfiguration = new StudentDashboardconfiguration();
		
		$studentDashboardconfiguration->id = $row['id'];
		$studentDashboardconfiguration->changeDate = $row['change_date'];
		$studentDashboardconfiguration->changedById = $row['changed_by_id'];
		$studentDashboardconfiguration->enabled = $row['enabled'];
		$studentDashboardconfiguration->recentEnrollmentTimeDelta = $row['recent_enrollment_time_delta'];

		return $studentDashboardconfiguration;
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
	 * @return StudentDashboardconfigurationMySql 
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