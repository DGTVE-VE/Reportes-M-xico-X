<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentPeerworkflowitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentPeerworkflowitem 
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
 	 * @param assessmentPeerworkflowitem primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentPeerworkflowitem assessmentPeerworkflowitem
 	 */
	public function insert($assessmentPeerworkflowitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentPeerworkflowitem assessmentPeerworkflowitem
 	 */
	public function update($assessmentPeerworkflowitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByScorerId($value);

	public function queryByAuthorId($value);

	public function queryBySubmissionUuid($value);

	public function queryByStartedAt($value);

	public function queryByAssessmentId($value);

	public function queryByScored($value);


	public function deleteByScorerId($value);

	public function deleteByAuthorId($value);

	public function deleteBySubmissionUuid($value);

	public function deleteByStartedAt($value);

	public function deleteByAssessmentId($value);

	public function deleteByScored($value);


}
?>