<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SubmissionsScoresummaryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SubmissionsScoresummary 
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
 	 * @param submissionsScoresummary primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsScoresummary submissionsScoresummary
 	 */
	public function insert($submissionsScoresummary);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsScoresummary submissionsScoresummary
 	 */
	public function update($submissionsScoresummary);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentItemId($value);

	public function queryByHighestId($value);

	public function queryByLatestId($value);


	public function deleteByStudentItemId($value);

	public function deleteByHighestId($value);

	public function deleteByLatestId($value);


}
?>