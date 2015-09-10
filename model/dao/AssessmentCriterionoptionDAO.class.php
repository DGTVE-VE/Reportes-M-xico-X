<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentCriterionoptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentCriterionoption 
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
 	 * @param assessmentCriterionoption primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentCriterionoption assessmentCriterionoption
 	 */
	public function insert($assessmentCriterionoption);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentCriterionoption assessmentCriterionoption
 	 */
	public function update($assessmentCriterionoption);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCriterionId($value);

	public function queryByOrderNum($value);

	public function queryByPoints($value);

	public function queryByName($value);

	public function queryByExplanation($value);

	public function queryByLabel($value);


	public function deleteByCriterionId($value);

	public function deleteByOrderNum($value);

	public function deleteByPoints($value);

	public function deleteByName($value);

	public function deleteByExplanation($value);

	public function deleteByLabel($value);


}
?>