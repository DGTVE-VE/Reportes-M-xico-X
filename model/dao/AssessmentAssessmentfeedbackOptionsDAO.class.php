<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentfeedbackOptionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessmentfeedbackOptions 
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
 	 * @param assessmentAssessmentfeedbackOption primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackOptions assessmentAssessmentfeedbackOption
 	 */
	public function insert($assessmentAssessmentfeedbackOption);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackOptions assessmentAssessmentfeedbackOption
 	 */
	public function update($assessmentAssessmentfeedbackOption);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAssessmentfeedbackId($value);

	public function queryByAssessmentfeedbackoptionId($value);


	public function deleteByAssessmentfeedbackId($value);

	public function deleteByAssessmentfeedbackoptionId($value);


}
?>