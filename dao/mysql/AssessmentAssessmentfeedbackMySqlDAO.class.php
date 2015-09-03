<?php
/**
 * Class that operate on table 'assessment_assessmentfeedback'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentfeedbackMySqlDAO implements AssessmentAssessmentfeedbackDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentfeedbackMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessmentfeedback WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessmentfeedback';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessmentfeedback ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessmentfeedback primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessmentfeedback WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackMySql assessmentAssessmentfeedback
 	 */
	public function insert($assessmentAssessmentfeedback){
		$sql = 'INSERT INTO assessment_assessmentfeedback (submission_uuid, feedback_text) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessmentfeedback->submissionUuid);
		$sqlQuery->set($assessmentAssessmentfeedback->feedbackText);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessmentfeedback->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackMySql assessmentAssessmentfeedback
 	 */
	public function update($assessmentAssessmentfeedback){
		$sql = 'UPDATE assessment_assessmentfeedback SET submission_uuid = ?, feedback_text = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessmentfeedback->submissionUuid);
		$sqlQuery->set($assessmentAssessmentfeedback->feedbackText);

		$sqlQuery->setNumber($assessmentAssessmentfeedback->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessmentfeedback';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFeedbackText($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback WHERE feedback_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFeedbackText($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback WHERE feedback_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentfeedbackMySql 
	 */
	protected function readRow($row){
		$assessmentAssessmentfeedback = new AssessmentAssessmentfeedback();
		
		$assessmentAssessmentfeedback->id = $row['id'];
		$assessmentAssessmentfeedback->submissionUuid = $row['submission_uuid'];
		$assessmentAssessmentfeedback->feedbackText = $row['feedback_text'];

		return $assessmentAssessmentfeedback;
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
	 * @return AssessmentAssessmentfeedbackMySql 
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