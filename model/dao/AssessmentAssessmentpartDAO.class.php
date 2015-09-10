<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentpartDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessmentpart 
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
 	 * @param assessmentAssessmentpart primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentpart assessmentAssessmentpart
 	 */
	public function insert($assessmentAssessmentpart);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentpart assessmentAssessmentpart
 	 */
	public function update($assessmentAssessmentpart);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAssessmentId($value);

	public function queryByOptionId($value);

	public function queryByFeedback($value);

	public function queryByCriterionId($value);


	public function deleteByAssessmentId($value);

	public function deleteByOptionId($value);

	public function deleteByFeedback($value);

	public function deleteByCriterionId($value);


}
?>