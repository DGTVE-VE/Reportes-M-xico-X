<?php
/**
 * Class that operate on table 'assessment_assessment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentMySqlDAO implements AssessmentAssessmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessment';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessment ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessment primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentMySql assessmentAssessment
 	 */
	public function insert($assessmentAssessment){
		$sql = 'INSERT INTO assessment_assessment (submission_uuid, rubric_id, scored_at, scorer_id, score_type, feedback) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessment->submissionUuid);
		$sqlQuery->setNumber($assessmentAssessment->rubricId);
		$sqlQuery->set($assessmentAssessment->scoredAt);
		$sqlQuery->set($assessmentAssessment->scorerId);
		$sqlQuery->set($assessmentAssessment->scoreType);
		$sqlQuery->set($assessmentAssessment->feedback);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessment->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentMySql assessmentAssessment
 	 */
	public function update($assessmentAssessment){
		$sql = 'UPDATE assessment_assessment SET submission_uuid = ?, rubric_id = ?, scored_at = ?, scorer_id = ?, score_type = ?, feedback = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessment->submissionUuid);
		$sqlQuery->setNumber($assessmentAssessment->rubricId);
		$sqlQuery->set($assessmentAssessment->scoredAt);
		$sqlQuery->set($assessmentAssessment->scorerId);
		$sqlQuery->set($assessmentAssessment->scoreType);
		$sqlQuery->set($assessmentAssessment->feedback);

		$sqlQuery->setNumber($assessmentAssessment->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessment';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRubricId($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScoredAt($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE scored_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScorerId($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE scorer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScoreType($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE score_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFeedback($value){
		$sql = 'SELECT * FROM assessment_assessment WHERE feedback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_assessment WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRubricId($value){
		$sql = 'DELETE FROM assessment_assessment WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScoredAt($value){
		$sql = 'DELETE FROM assessment_assessment WHERE scored_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScorerId($value){
		$sql = 'DELETE FROM assessment_assessment WHERE scorer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScoreType($value){
		$sql = 'DELETE FROM assessment_assessment WHERE score_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFeedback($value){
		$sql = 'DELETE FROM assessment_assessment WHERE feedback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentMySql 
	 */
	protected function readRow($row){
		$assessmentAssessment = new AssessmentAssessment();
		
		$assessmentAssessment->id = $row['id'];
		$assessmentAssessment->submissionUuid = $row['submission_uuid'];
		$assessmentAssessment->rubricId = $row['rubric_id'];
		$assessmentAssessment->scoredAt = $row['scored_at'];
		$assessmentAssessment->scorerId = $row['scorer_id'];
		$assessmentAssessment->scoreType = $row['score_type'];
		$assessmentAssessment->feedback = $row['feedback'];

		return $assessmentAssessment;
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
	 * @return AssessmentAssessmentMySql 
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