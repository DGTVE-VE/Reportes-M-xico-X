<?php
/**
 * Class that operate on table 'workflow_assessmentworkflow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WorkflowAssessmentworkflowMySqlDAO implements WorkflowAssessmentworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WorkflowAssessmentworkflowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM workflow_assessmentworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM workflow_assessmentworkflow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param workflowAssessmentworkflow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkflowAssessmentworkflowMySql workflowAssessmentworkflow
 	 */
	public function insert($workflowAssessmentworkflow){
		$sql = 'INSERT INTO workflow_assessmentworkflow (created, modified, status, status_changed, submission_uuid, uuid, course_id, item_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($workflowAssessmentworkflow->created);
		$sqlQuery->set($workflowAssessmentworkflow->modified);
		$sqlQuery->set($workflowAssessmentworkflow->status);
		$sqlQuery->set($workflowAssessmentworkflow->statusChanged);
		$sqlQuery->set($workflowAssessmentworkflow->submissionUuid);
		$sqlQuery->set($workflowAssessmentworkflow->uuid);
		$sqlQuery->set($workflowAssessmentworkflow->courseId);
		$sqlQuery->set($workflowAssessmentworkflow->itemId);

		$id = $this->executeInsert($sqlQuery);	
		$workflowAssessmentworkflow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkflowAssessmentworkflowMySql workflowAssessmentworkflow
 	 */
	public function update($workflowAssessmentworkflow){
		$sql = 'UPDATE workflow_assessmentworkflow SET created = ?, modified = ?, status = ?, status_changed = ?, submission_uuid = ?, uuid = ?, course_id = ?, item_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($workflowAssessmentworkflow->created);
		$sqlQuery->set($workflowAssessmentworkflow->modified);
		$sqlQuery->set($workflowAssessmentworkflow->status);
		$sqlQuery->set($workflowAssessmentworkflow->statusChanged);
		$sqlQuery->set($workflowAssessmentworkflow->submissionUuid);
		$sqlQuery->set($workflowAssessmentworkflow->uuid);
		$sqlQuery->set($workflowAssessmentworkflow->courseId);
		$sqlQuery->set($workflowAssessmentworkflow->itemId);

		$sqlQuery->setNumber($workflowAssessmentworkflow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM workflow_assessmentworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatusChanged($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE status_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUuid($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatusChanged($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE status_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUuid($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM workflow_assessmentworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WorkflowAssessmentworkflowMySql 
	 */
	protected function readRow($row){
		$workflowAssessmentworkflow = new WorkflowAssessmentworkflow();
		
		$workflowAssessmentworkflow->id = $row['id'];
		$workflowAssessmentworkflow->created = $row['created'];
		$workflowAssessmentworkflow->modified = $row['modified'];
		$workflowAssessmentworkflow->status = $row['status'];
		$workflowAssessmentworkflow->statusChanged = $row['status_changed'];
		$workflowAssessmentworkflow->submissionUuid = $row['submission_uuid'];
		$workflowAssessmentworkflow->uuid = $row['uuid'];
		$workflowAssessmentworkflow->courseId = $row['course_id'];
		$workflowAssessmentworkflow->itemId = $row['item_id'];

		return $workflowAssessmentworkflow;
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
	 * @return WorkflowAssessmentworkflowMySql 
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