<?php
/**
 * Class that operate on table 'assessment_peerworkflow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentPeerworkflowMySqlDAO implements AssessmentPeerworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentPeerworkflowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_peerworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_peerworkflow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentPeerworkflow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentPeerworkflowMySql assessmentPeerworkflow
 	 */
	public function insert($assessmentPeerworkflow){
		$sql = 'INSERT INTO assessment_peerworkflow (student_id, item_id, course_id, submission_uuid, created_at, completed_at, grading_completed_at) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentPeerworkflow->studentId);
		$sqlQuery->set($assessmentPeerworkflow->itemId);
		$sqlQuery->set($assessmentPeerworkflow->courseId);
		$sqlQuery->set($assessmentPeerworkflow->submissionUuid);
		$sqlQuery->set($assessmentPeerworkflow->createdAt);
		$sqlQuery->set($assessmentPeerworkflow->completedAt);
		$sqlQuery->set($assessmentPeerworkflow->gradingCompletedAt);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentPeerworkflow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentPeerworkflowMySql assessmentPeerworkflow
 	 */
	public function update($assessmentPeerworkflow){
		$sql = 'UPDATE assessment_peerworkflow SET student_id = ?, item_id = ?, course_id = ?, submission_uuid = ?, created_at = ?, completed_at = ?, grading_completed_at = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentPeerworkflow->studentId);
		$sqlQuery->set($assessmentPeerworkflow->itemId);
		$sqlQuery->set($assessmentPeerworkflow->courseId);
		$sqlQuery->set($assessmentPeerworkflow->submissionUuid);
		$sqlQuery->set($assessmentPeerworkflow->createdAt);
		$sqlQuery->set($assessmentPeerworkflow->completedAt);
		$sqlQuery->set($assessmentPeerworkflow->gradingCompletedAt);

		$sqlQuery->setNumber($assessmentPeerworkflow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_peerworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompletedAt($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGradingCompletedAt($value){
		$sql = 'SELECT * FROM assessment_peerworkflow WHERE grading_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentId($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompletedAt($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGradingCompletedAt($value){
		$sql = 'DELETE FROM assessment_peerworkflow WHERE grading_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentPeerworkflowMySql 
	 */
	protected function readRow($row){
		$assessmentPeerworkflow = new AssessmentPeerworkflow();
		
		$assessmentPeerworkflow->id = $row['id'];
		$assessmentPeerworkflow->studentId = $row['student_id'];
		$assessmentPeerworkflow->itemId = $row['item_id'];
		$assessmentPeerworkflow->courseId = $row['course_id'];
		$assessmentPeerworkflow->submissionUuid = $row['submission_uuid'];
		$assessmentPeerworkflow->createdAt = $row['created_at'];
		$assessmentPeerworkflow->completedAt = $row['completed_at'];
		$assessmentPeerworkflow->gradingCompletedAt = $row['grading_completed_at'];

		return $assessmentPeerworkflow;
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
	 * @return AssessmentPeerworkflowMySql 
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