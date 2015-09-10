<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAiclassifiersetDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAiclassifierset 
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
 	 * @param assessmentAiclassifierset primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAiclassifierset assessmentAiclassifierset
 	 */
	public function insert($assessmentAiclassifierset);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAiclassifierset assessmentAiclassifierset
 	 */
	public function update($assessmentAiclassifierset);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRubricId($value);

	public function queryByCreatedAt($value);

	public function queryByAlgorithmId($value);

	public function queryByCourseId($value);

	public function queryByItemId($value);


	public function deleteByRubricId($value);

	public function deleteByCreatedAt($value);

	public function deleteByAlgorithmId($value);

	public function deleteByCourseId($value);

	public function deleteByItemId($value);


}
?>