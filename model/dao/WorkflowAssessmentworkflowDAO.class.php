<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WorkflowAssessmentworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WorkflowAssessmentworkflow 
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
 	 * @param workflowAssessmentworkflow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkflowAssessmentworkflow workflowAssessmentworkflow
 	 */
	public function insert($workflowAssessmentworkflow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkflowAssessmentworkflow workflowAssessmentworkflow
 	 */
	public function update($workflowAssessmentworkflow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByStatus($value);

	public function queryByStatusChanged($value);

	public function queryBySubmissionUuid($value);

	public function queryByUuid($value);

	public function queryByCourseId($value);

	public function queryByItemId($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByStatus($value);

	public function deleteByStatusChanged($value);

	public function deleteBySubmissionUuid($value);

	public function deleteByUuid($value);

	public function deleteByCourseId($value);

	public function deleteByItemId($value);


}
?>