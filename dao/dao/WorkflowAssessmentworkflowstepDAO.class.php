<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WorkflowAssessmentworkflowstepDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WorkflowAssessmentworkflowstep 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param workflowAssessmentworkflowstep primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkflowAssessmentworkflowstep workflowAssessmentworkflowstep
 	 */
	public function insert($workflowAssessmentworkflowstep);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkflowAssessmentworkflowstep workflowAssessmentworkflowstep
 	 */
	public function update($workflowAssessmentworkflowstep);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByWorkflowId($value);

	public function queryByName($value);

	public function queryBySubmitterCompletedAt($value);

	public function queryByAssessmentCompletedAt($value);

	public function queryByOrderNum($value);


	public function deleteByWorkflowId($value);

	public function deleteByName($value);

	public function deleteBySubmitterCompletedAt($value);

	public function deleteByAssessmentCompletedAt($value);

	public function deleteByOrderNum($value);


}
?>