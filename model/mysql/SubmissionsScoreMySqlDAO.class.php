<?php
/**
 * Class that operate on table 'submissions_score'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SubmissionsScoreMySqlDAO implements SubmissionsScoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SubmissionsScoreMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM submissions_score WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM submissions_score';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM submissions_score ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param submissionsScore primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM submissions_score WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsScoreMySql submissionsScore
 	 */
	public function insert($submissionsScore){
		$sql = 'INSERT INTO submissions_score (student_item_id, submission_id, points_earned, points_possible, created_at, reset) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($submissionsScore->studentItemId);
		$sqlQuery->setNumber($submissionsScore->submissionId);
		$sqlQuery->setNumber($submissionsScore->pointsEarned);
		$sqlQuery->setNumber($submissionsScore->pointsPossible);
		$sqlQuery->set($submissionsScore->createdAt);
		$sqlQuery->setNumber($submissionsScore->reset);

		$id = $this->executeInsert($sqlQuery);	
		$submissionsScore->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsScoreMySql submissionsScore
 	 */
	public function update($submissionsScore){
		$sql = 'UPDATE submissions_score SET student_item_id = ?, submission_id = ?, points_earned = ?, points_possible = ?, created_at = ?, reset = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($submissionsScore->studentItemId);
		$sqlQuery->setNumber($submissionsScore->submissionId);
		$sqlQuery->setNumber($submissionsScore->pointsEarned);
		$sqlQuery->setNumber($submissionsScore->pointsPossible);
		$sqlQuery->set($submissionsScore->createdAt);
		$sqlQuery->setNumber($submissionsScore->reset);

		$sqlQuery->setNumber($submissionsScore->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM submissions_score';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentItemId($value){
		$sql = 'SELECT * FROM submissions_score WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmissionId($value){
		$sql = 'SELECT * FROM submissions_score WHERE submission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPointsEarned($value){
		$sql = 'SELECT * FROM submissions_score WHERE points_earned = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPointsPossible($value){
		$sql = 'SELECT * FROM submissions_score WHERE points_possible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM submissions_score WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReset($value){
		$sql = 'SELECT * FROM submissions_score WHERE reset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentItemId($value){
		$sql = 'DELETE FROM submissions_score WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmissionId($value){
		$sql = 'DELETE FROM submissions_score WHERE submission_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPointsEarned($value){
		$sql = 'DELETE FROM submissions_score WHERE points_earned = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPointsPossible($value){
		$sql = 'DELETE FROM submissions_score WHERE points_possible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM submissions_score WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReset($value){
		$sql = 'DELETE FROM submissions_score WHERE reset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SubmissionsScoreMySql 
	 */
	protected function readRow($row){
		$submissionsScore = new SubmissionsScore();
		
		$submissionsScore->id = $row['id'];
		$submissionsScore->studentItemId = $row['student_item_id'];
		$submissionsScore->submissionId = $row['submission_id'];
		$submissionsScore->pointsEarned = $row['points_earned'];
		$submissionsScore->pointsPossible = $row['points_possible'];
		$submissionsScore->createdAt = $row['created_at'];
		$submissionsScore->reset = $row['reset'];

		return $submissionsScore;
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
	 * @return SubmissionsScoreMySql 
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