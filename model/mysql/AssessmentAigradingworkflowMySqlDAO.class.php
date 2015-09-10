<?php
/**
 * Class that operate on table 'assessment_aigradingworkflow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAigradingworkflowMySqlDAO implements AssessmentAigradingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAigradingworkflowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_aigradingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_aigradingworkflow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAigradingworkflow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAigradingworkflowMySql assessmentAigradingworkflow
 	 */
	public function insert($assessmentAigradingworkflow){
		$sql = 'INSERT INTO assessment_aigradingworkflow (uuid, scheduled_at, completed_at, submission_uuid, classifier_set_id, algorithm_id, rubric_id, assessment_id, student_id, item_id, course_id, essay_text) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAigradingworkflow->uuid);
		$sqlQuery->set($assessmentAigradingworkflow->scheduledAt);
		$sqlQuery->set($assessmentAigradingworkflow->completedAt);
		$sqlQuery->set($assessmentAigradingworkflow->submissionUuid);
		$sqlQuery->setNumber($assessmentAigradingworkflow->classifierSetId);
		$sqlQuery->set($assessmentAigradingworkflow->algorithmId);
		$sqlQuery->setNumber($assessmentAigradingworkflow->rubricId);
		$sqlQuery->setNumber($assessmentAigradingworkflow->assessmentId);
		$sqlQuery->set($assessmentAigradingworkflow->studentId);
		$sqlQuery->set($assessmentAigradingworkflow->itemId);
		$sqlQuery->set($assessmentAigradingworkflow->courseId);
		$sqlQuery->set($assessmentAigradingworkflow->essayText);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAigradingworkflow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAigradingworkflowMySql assessmentAigradingworkflow
 	 */
	public function update($assessmentAigradingworkflow){
		$sql = 'UPDATE assessment_aigradingworkflow SET uuid = ?, scheduled_at = ?, completed_at = ?, submission_uuid = ?, classifier_set_id = ?, algorithm_id = ?, rubric_id = ?, assessment_id = ?, student_id = ?, item_id = ?, course_id = ?, essay_text = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAigradingworkflow->uuid);
		$sqlQuery->set($assessmentAigradingworkflow->scheduledAt);
		$sqlQuery->set($assessmentAigradingworkflow->completedAt);
		$sqlQuery->set($assessmentAigradingworkflow->submissionUuid);
		$sqlQuery->setNumber($assessmentAigradingworkflow->classifierSetId);
		$sqlQuery->set($assessmentAigradingworkflow->algorithmId);
		$sqlQuery->setNumber($assessmentAigradingworkflow->rubricId);
		$sqlQuery->setNumber($assessmentAigradingworkflow->assessmentId);
		$sqlQuery->set($assessmentAigradingworkflow->studentId);
		$sqlQuery->set($assessmentAigradingworkflow->itemId);
		$sqlQuery->set($assessmentAigradingworkflow->courseId);
		$sqlQuery->set($assessmentAigradingworkflow->essayText);

		$sqlQuery->setNumber($assessmentAigradingworkflow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_aigradingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUuid($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScheduledAt($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE scheduled_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompletedAt($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClassifierSetId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlgorithmId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRubricId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssessmentId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEssayText($value){
		$sql = 'SELECT * FROM assessment_aigradingworkflow WHERE essay_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUuid($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScheduledAt($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE scheduled_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompletedAt($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClassifierSetId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlgorithmId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRubricId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssessmentId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEssayText($value){
		$sql = 'DELETE FROM assessment_aigradingworkflow WHERE essay_text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAigradingworkflowMySql 
	 */
	protected function readRow($row){
		$assessmentAigradingworkflow = new AssessmentAigradingworkflow();
		
		$assessmentAigradingworkflow->id = $row['id'];
		$assessmentAigradingworkflow->uuid = $row['uuid'];
		$assessmentAigradingworkflow->scheduledAt = $row['scheduled_at'];
		$assessmentAigradingworkflow->completedAt = $row['completed_at'];
		$assessmentAigradingworkflow->submissionUuid = $row['submission_uuid'];
		$assessmentAigradingworkflow->classifierSetId = $row['classifier_set_id'];
		$assessmentAigradingworkflow->algorithmId = $row['algorithm_id'];
		$assessmentAigradingworkflow->rubricId = $row['rubric_id'];
		$assessmentAigradingworkflow->assessmentId = $row['assessment_id'];
		$assessmentAigradingworkflow->studentId = $row['student_id'];
		$assessmentAigradingworkflow->itemId = $row['item_id'];
		$assessmentAigradingworkflow->courseId = $row['course_id'];
		$assessmentAigradingworkflow->essayText = $row['essay_text'];

		return $assessmentAigradingworkflow;
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
	 * @return AssessmentAigradingworkflowMySql 
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