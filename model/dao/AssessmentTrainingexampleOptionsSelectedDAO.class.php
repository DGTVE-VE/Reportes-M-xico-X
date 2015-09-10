<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentTrainingexampleOptionsSelectedDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentTrainingexampleOptionsSelected 
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
 	 * @param assessmentTrainingexampleOptionsSelected primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentTrainingexampleOptionsSelected assessmentTrainingexampleOptionsSelected
 	 */
	public function insert($assessmentTrainingexampleOptionsSelected);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentTrainingexampleOptionsSelected assessmentTrainingexampleOptionsSelected
 	 */
	public function update($assessmentTrainingexampleOptionsSelected);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTrainingexampleId($value);

	public function queryByCriterionoptionId($value);


	public function deleteByTrainingexampleId($value);

	public function deleteByCriterionoptionId($value);


}
?>