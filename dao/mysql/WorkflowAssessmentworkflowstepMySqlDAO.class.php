<?php
/**
 * Class that operate on table 'workflow_assessmentworkflowstep'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WorkflowAssessmentworkflowstepMySqlDAO implements WorkflowAssessmentworkflowstepDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WorkflowAssessmentworkflowstepMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param workflowAssessmentworkflowstep primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkflowAssessmentworkflowstepMySql workflowAssessmentworkflowstep
 	 */
	public function insert($workflowAssessmentworkflowstep){
		$sql = 'INSERT INTO workflow_assessmentworkflowstep (workflow_id, name, submitter_completed_at, assessment_completed_at, order_num) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($workflowAssessmentworkflowstep->workflowId);
		$sqlQuery->set($workflowAssessmentworkflowstep->name);
		$sqlQuery->set($workflowAssessmentworkflowstep->submitterCompletedAt);
		$sqlQuery->set($workflowAssessmentworkflowstep->assessmentCompletedAt);
		$sqlQuery->setNumber($workflowAssessmentworkflowstep->orderNum);

		$id = $this->executeInsert($sqlQuery);	
		$workflowAssessmentworkflowstep->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkflowAssessmentworkflowstepMySql workflowAssessmentworkflowstep
 	 */
	public function update($workflowAssessmentworkflowstep){
		$sql = 'UPDATE workflow_assessmentworkflowstep SET workflow_id = ?, name = ?, submitter_completed_at = ?, assessment_completed_at = ?, order_num = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($workflowAssessmentworkflowstep->workflowId);
		$sqlQuery->set($workflowAssessmentworkflowstep->name);
		$sqlQuery->set($workflowAssessmentworkflowstep->submitterCompletedAt);
		$sqlQuery->set($workflowAssessmentworkflowstep->assessmentCompletedAt);
		$sqlQuery->setNumber($workflowAssessmentworkflowstep->orderNum);

		$sqlQuery->setNumber($workflowAssessmentworkflowstep->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByWorkflowId($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE workflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmitterCompletedAt($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE submitter_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssessmentCompletedAt($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE assessment_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderNum($value){
		$sql = 'SELECT * FROM workflow_assessmentworkflowstep WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByWorkflowId($value){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE workflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmitterCompletedAt($value){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE submitter_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssessmentCompletedAt($value){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE assessment_completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderNum($value){
		$sql = 'DELETE FROM workflow_assessmentworkflowstep WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WorkflowAssessmentworkflowstepMySql 
	 */
	protected function readRow($row){
		$workflowAssessmentworkflowstep = new WorkflowAssessmentworkflowstep();
		
		$workflowAssessmentworkflowstep->id = $row['id'];
		$workflowAssessmentworkflowstep->workflowId = $row['workflow_id'];
		$workflowAssessmentworkflowstep->name = $row['name'];
		$workflowAssessmentworkflowstep->submitterCompletedAt = $row['submitter_completed_at'];
		$workflowAssessmentworkflowstep->assessmentCompletedAt = $row['assessment_completed_at'];
		$workflowAssessmentworkflowstep->orderNum = $row['order_num'];

		return $workflowAssessmentworkflowstep;
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
	 * @return WorkflowAssessmentworkflowstepMySql 
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