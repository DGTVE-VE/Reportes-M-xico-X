<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentTrainingexampleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentTrainingexample 
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
 	 * @param assessmentTrainingexample primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentTrainingexample assessmentTrainingexample
 	 */
	public function insert($assessmentTrainingexample);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentTrainingexample assessmentTrainingexample
 	 */
	public function update($assessmentTrainingexample);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRawAnswer($value);

	public function queryByRubricId($value);

	public function queryByContentHash($value);


	public function deleteByRawAnswer($value);

	public function deleteByRubricId($value);

	public function deleteByContentHash($value);


}
?>