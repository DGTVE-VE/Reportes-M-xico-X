<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentfeedbackDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessmentfeedback 
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
 	 * @param assessmentAssessmentfeedback primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedback assessmentAssessmentfeedback
 	 */
	public function insert($assessmentAssessmentfeedback);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedback assessmentAssessmentfeedback
 	 */
	public function update($assessmentAssessmentfeedback);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubmissionUuid($value);

	public function queryByFeedbackText($value);


	public function deleteBySubmissionUuid($value);

	public function deleteByFeedbackText($value);


}
?>