<?php
/**
 * Class that operate on table 'reverification_midcoursereverificationwindow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ReverificationMidcoursereverificationwindowMySqlDAO implements ReverificationMidcoursereverificationwindowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ReverificationMidcoursereverificationwindowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param reverificationMidcoursereverificationwindow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM reverification_midcoursereverificationwindow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ReverificationMidcoursereverificationwindowMySql reverificationMidcoursereverificationwindow
 	 */
	public function insert($reverificationMidcoursereverificationwindow){
		$sql = 'INSERT INTO reverification_midcoursereverificationwindow (course_id, start_date, end_date) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($reverificationMidcoursereverificationwindow->courseId);
		$sqlQuery->set($reverificationMidcoursereverificationwindow->startDate);
		$sqlQuery->set($reverificationMidcoursereverificationwindow->endDate);

		$id = $this->executeInsert($sqlQuery);	
		$reverificationMidcoursereverificationwindow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ReverificationMidcoursereverificationwindowMySql reverificationMidcoursereverificationwindow
 	 */
	public function update($reverificationMidcoursereverificationwindow){
		$sql = 'UPDATE reverification_midcoursereverificationwindow SET course_id = ?, start_date = ?, end_date = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($reverificationMidcoursereverificationwindow->courseId);
		$sqlQuery->set($reverificationMidcoursereverificationwindow->startDate);
		$sqlQuery->set($reverificationMidcoursereverificationwindow->endDate);

		$sqlQuery->setNumber($reverificationMidcoursereverificationwindow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM reverification_midcoursereverificationwindow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStartDate($value){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow WHERE start_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEndDate($value){
		$sql = 'SELECT * FROM reverification_midcoursereverificationwindow WHERE end_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM reverification_midcoursereverificationwindow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStartDate($value){
		$sql = 'DELETE FROM reverification_midcoursereverificationwindow WHERE start_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEndDate($value){
		$sql = 'DELETE FROM reverification_midcoursereverificationwindow WHERE end_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ReverificationMidcoursereverificationwindowMySql 
	 */
	protected function readRow($row){
		$reverificationMidcoursereverificationwindow = new ReverificationMidcoursereverificationwindow();
		
		$reverificationMidcoursereverificationwindow->id = $row['id'];
		$reverificationMidcoursereverificationwindow->courseId = $row['course_id'];
		$reverificationMidcoursereverificationwindow->startDate = $row['start_date'];
		$reverificationMidcoursereverificationwindow->endDate = $row['end_date'];

		return $reverificationMidcoursereverificationwindow;
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
	 * @return ReverificationMidcoursereverificationwindowMySql 
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