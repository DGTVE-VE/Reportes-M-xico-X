<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentCriterionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentCriterion 
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
 	 * @param assessmentCriterion primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentCriterion assessmentCriterion
 	 */
	public function insert($assessmentCriterion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentCriterion assessmentCriterion
 	 */
	public function update($assessmentCriterion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRubricId($value);

	public function queryByName($value);

	public function queryByOrderNum($value);

	public function queryByPrompt($value);

	public function queryByLabel($value);


	public function deleteByRubricId($value);

	public function deleteByName($value);

	public function deleteByOrderNum($value);

	public function deleteByPrompt($value);

	public function deleteByLabel($value);


}
?>