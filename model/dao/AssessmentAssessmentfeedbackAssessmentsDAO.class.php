<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentfeedbackAssessmentsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessmentfeedbackAssessments 
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
 	 * @param assessmentAssessmentfeedbackAssessment primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackAssessments assessmentAssessmentfeedbackAssessment
 	 */
	public function insert($assessmentAssessmentfeedbackAssessment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackAssessments assessmentAssessmentfeedbackAssessment
 	 */
	public function update($assessmentAssessmentfeedbackAssessment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAssessmentfeedbackId($value);

	public function queryByAssessmentId($value);


	public function deleteByAssessmentfeedbackId($value);

	public function deleteByAssessmentId($value);


}
?>