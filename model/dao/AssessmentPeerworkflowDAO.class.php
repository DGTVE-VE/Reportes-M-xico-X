<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentPeerworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentPeerworkflow 
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
 	 * @param assessmentPeerworkflow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentPeerworkflow assessmentPeerworkflow
 	 */
	public function insert($assessmentPeerworkflow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentPeerworkflow assessmentPeerworkflow
 	 */
	public function update($assessmentPeerworkflow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentId($value);

	public function queryByItemId($value);

	public function queryByCourseId($value);

	public function queryBySubmissionUuid($value);

	public function queryByCreatedAt($value);

	public function queryByCompletedAt($value);

	public function queryByGradingCompletedAt($value);


	public function deleteByStudentId($value);

	public function deleteByItemId($value);

	public function deleteByCourseId($value);

	public function deleteBySubmissionUuid($value);

	public function deleteByCreatedAt($value);

	public function deleteByCompletedAt($value);

	public function deleteByGradingCompletedAt($value);


}
?>