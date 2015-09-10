<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentRubricDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentRubric 
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
 	 * @param assessmentRubric primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentRubric assessmentRubric
 	 */
	public function insert($assessmentRubric);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentRubric assessmentRubric
 	 */
	public function update($assessmentRubric);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByContentHash($value);

	public function queryByStructureHash($value);


	public function deleteByContentHash($value);

	public function deleteByStructureHash($value);


}
?>