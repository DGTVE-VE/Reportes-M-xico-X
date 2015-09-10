<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SubmissionsSubmissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SubmissionsSubmission 
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
 	 * @param submissionsSubmission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsSubmission submissionsSubmission
 	 */
	public function insert($submissionsSubmission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsSubmission submissionsSubmission
 	 */
	public function update($submissionsSubmission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUuid($value);

	public function queryByStudentItemId($value);

	public function queryByAttemptNumber($value);

	public function queryBySubmittedAt($value);

	public function queryByCreatedAt($value);

	public function queryByRawAnswer($value);


	public function deleteByUuid($value);

	public function deleteByStudentItemId($value);

	public function deleteByAttemptNumber($value);

	public function deleteBySubmittedAt($value);

	public function deleteByCreatedAt($value);

	public function deleteByRawAnswer($value);


}
?>