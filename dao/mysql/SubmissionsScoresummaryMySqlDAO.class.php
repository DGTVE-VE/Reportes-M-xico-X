<?php
/**
 * Class that operate on table 'submissions_scoresummary'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SubmissionsScoresummaryMySqlDAO implements SubmissionsScoresummaryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SubmissionsScoresummaryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM submissions_scoresummary WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM submissions_scoresummary';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM submissions_scoresummary ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param submissionsScoresummary primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM submissions_scoresummary WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsScoresummaryMySql submissionsScoresummary
 	 */
	public function insert($submissionsScoresummary){
		$sql = 'INSERT INTO submissions_scoresummary (student_item_id, highest_id, latest_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($submissionsScoresummary->studentItemId);
		$sqlQuery->setNumber($submissionsScoresummary->highestId);
		$sqlQuery->setNumber($submissionsScoresummary->latestId);

		$id = $this->executeInsert($sqlQuery);	
		$submissionsScoresummary->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsScoresummaryMySql submissionsScoresummary
 	 */
	public function update($submissionsScoresummary){
		$sql = 'UPDATE submissions_scoresummary SET student_item_id = ?, highest_id = ?, latest_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($submissionsScoresummary->studentItemId);
		$sqlQuery->setNumber($submissionsScoresummary->highestId);
		$sqlQuery->setNumber($submissionsScoresummary->latestId);

		$sqlQuery->setNumber($submissionsScoresummary->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM submissions_scoresummary';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentItemId($value){
		$sql = 'SELECT * FROM submissions_scoresummary WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHighestId($value){
		$sql = 'SELECT * FROM submissions_scoresummary WHERE highest_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLatestId($value){
		$sql = 'SELECT * FROM submissions_scoresummary WHERE latest_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentItemId($value){
		$sql = 'DELETE FROM submissions_scoresummary WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHighestId($value){
		$sql = 'DELETE FROM submissions_scoresummary WHERE highest_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLatestId($value){
		$sql = 'DELETE FROM submissions_scoresummary WHERE latest_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SubmissionsScoresummaryMySql 
	 */
	protected function readRow($row){
		$submissionsScoresummary = new SubmissionsScoresummary();
		
		$submissionsScoresummary->id = $row['id'];
		$submissionsScoresummary->studentItemId = $row['student_item_id'];
		$submissionsScoresummary->highestId = $row['highest_id'];
		$submissionsScoresummary->latestId = $row['latest_id'];

		return $submissionsScoresummary;
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
	 * @return SubmissionsScoresummaryMySql 
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