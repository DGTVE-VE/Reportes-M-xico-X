<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentfeedbackoptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessmentfeedbackoption 
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
 	 * @param assessmentAssessmentfeedbackoption primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackoption assessmentAssessmentfeedbackoption
 	 */
	public function insert($assessmentAssessmentfeedbackoption);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackoption assessmentAssessmentfeedbackoption
 	 */
	public function update($assessmentAssessmentfeedbackoption);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByText($value);


	public function deleteByText($value);


}
?>