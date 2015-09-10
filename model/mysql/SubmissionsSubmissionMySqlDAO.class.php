<?php
/**
 * Class that operate on table 'submissions_submission'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SubmissionsSubmissionMySqlDAO implements SubmissionsSubmissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SubmissionsSubmissionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM submissions_submission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM submissions_submission';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM submissions_submission ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param submissionsSubmission primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM submissions_submission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsSubmissionMySql submissionsSubmission
 	 */
	public function insert($submissionsSubmission){
		$sql = 'INSERT INTO submissions_submission (uuid, student_item_id, attempt_number, submitted_at, created_at, raw_answer) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($submissionsSubmission->uuid);
		$sqlQuery->setNumber($submissionsSubmission->studentItemId);
		$sqlQuery->setNumber($submissionsSubmission->attemptNumber);
		$sqlQuery->set($submissionsSubmission->submittedAt);
		$sqlQuery->set($submissionsSubmission->createdAt);
		$sqlQuery->set($submissionsSubmission->rawAnswer);

		$id = $this->executeInsert($sqlQuery);	
		$submissionsSubmission->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsSubmissionMySql submissionsSubmission
 	 */
	public function update($submissionsSubmission){
		$sql = 'UPDATE submissions_submission SET uuid = ?, student_item_id = ?, attempt_number = ?, submitted_at = ?, created_at = ?, raw_answer = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($submissionsSubmission->uuid);
		$sqlQuery->setNumber($submissionsSubmission->studentItemId);
		$sqlQuery->setNumber($submissionsSubmission->attemptNumber);
		$sqlQuery->set($submissionsSubmission->submittedAt);
		$sqlQuery->set($submissionsSubmission->createdAt);
		$sqlQuery->set($submissionsSubmission->rawAnswer);

		$sqlQuery->setNumber($submissionsSubmission->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM submissions_submission';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUuid($value){
		$sql = 'SELECT * FROM submissions_submission WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentItemId($value){
		$sql = 'SELECT * FROM submissions_submission WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAttemptNumber($value){
		$sql = 'SELECT * FROM submissions_submission WHERE attempt_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmittedAt($value){
		$sql = 'SELECT * FROM submissions_submission WHERE submitted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM submissions_submission WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRawAnswer($value){
		$sql = 'SELECT * FROM submissions_submission WHERE raw_answer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUuid($value){
		$sql = 'DELETE FROM submissions_submission WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentItemId($value){
		$sql = 'DELETE FROM submissions_submission WHERE student_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAttemptNumber($value){
		$sql = 'DELETE FROM submissions_submission WHERE attempt_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmittedAt($value){
		$sql = 'DELETE FROM submissions_submission WHERE submitted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM submissions_submission WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRawAnswer($value){
		$sql = 'DELETE FROM submissions_submission WHERE raw_answer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SubmissionsSubmissionMySql 
	 */
	protected function readRow($row){
		$submissionsSubmission = new SubmissionsSubmission();
		
		$submissionsSubmission->id = $row['id'];
		$submissionsSubmission->uuid = $row['uuid'];
		$submissionsSubmission->studentItemId = $row['student_item_id'];
		$submissionsSubmission->attemptNumber = $row['attempt_number'];
		$submissionsSubmission->submittedAt = $row['submitted_at'];
		$submissionsSubmission->createdAt = $row['created_at'];
		$submissionsSubmission->rawAnswer = $row['raw_answer'];

		return $submissionsSubmission;
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
	 * @return SubmissionsSubmissionMySql 
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