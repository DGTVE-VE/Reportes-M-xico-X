<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SubmissionsScoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SubmissionsScore 
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
 	 * @param submissionsScore primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsScore submissionsScore
 	 */
	public function insert($submissionsScore);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsScore submissionsScore
 	 */
	public function update($submissionsScore);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentItemId($value);

	public function queryBySubmissionId($value);

	public function queryByPointsEarned($value);

	public function queryByPointsPossible($value);

	public function queryByCreatedAt($value);

	public function queryByReset($value);


	public function deleteByStudentItemId($value);

	public function deleteBySubmissionId($value);

	public function deleteByPointsEarned($value);

	public function deleteByPointsPossible($value);

	public function deleteByCreatedAt($value);

	public function deleteByReset($value);


}
?>