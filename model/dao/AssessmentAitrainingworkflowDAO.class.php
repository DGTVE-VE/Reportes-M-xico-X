<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAitrainingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAitrainingworkflow 
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
 	 * @param assessmentAitrainingworkflow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAitrainingworkflow assessmentAitrainingworkflow
 	 */
	public function insert($assessmentAitrainingworkflow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAitrainingworkflow assessmentAitrainingworkflow
 	 */
	public function update($assessmentAitrainingworkflow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUuid($value);

	public function queryByAlgorithmId($value);

	public function queryByClassifierSetId($value);

	public function queryByScheduledAt($value);

	public function queryByCompletedAt($value);

	public function queryByItemId($value);

	public function queryByCourseId($value);


	public function deleteByUuid($value);

	public function deleteByAlgorithmId($value);

	public function deleteByClassifierSetId($value);

	public function deleteByScheduledAt($value);

	public function deleteByCompletedAt($value);

	public function deleteByItemId($value);

	public function deleteByCourseId($value);


}
?>