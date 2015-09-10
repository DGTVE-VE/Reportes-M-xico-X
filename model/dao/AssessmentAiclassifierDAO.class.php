<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAiclassifierDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAiclassifier 
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
 	 * @param assessmentAiclassifier primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAiclassifier assessmentAiclassifier
 	 */
	public function insert($assessmentAiclassifier);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAiclassifier assessmentAiclassifier
 	 */
	public function update($assessmentAiclassifier);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByClassifierSetId($value);

	public function queryByCriterionId($value);

	public function queryByClassifierData($value);


	public function deleteByClassifierSetId($value);

	public function deleteByCriterionId($value);

	public function deleteByClassifierData($value);


}
?>