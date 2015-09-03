<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentStudenttrainingworkflowitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentStudenttrainingworkflowitem 
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
 	 * @param assessmentStudenttrainingworkflowitem primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentStudenttrainingworkflowitem assessmentStudenttrainingworkflowitem
 	 */
	public function insert($assessmentStudenttrainingworkflowitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentStudenttrainingworkflowitem assessmentStudenttrainingworkflowitem
 	 */
	public function update($assessmentStudenttrainingworkflowitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByWorkflowId($value);

	public function queryByOrderNum($value);

	public function queryByStartedAt($value);

	public function queryByCompletedAt($value);

	public function queryByTrainingExampleId($value);


	public function deleteByWorkflowId($value);

	public function deleteByOrderNum($value);

	public function deleteByStartedAt($value);

	public function deleteByCompletedAt($value);

	public function deleteByTrainingExampleId($value);


}
?>