<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentLoginfailuresDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentLoginfailures 
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
 	 * @param studentLoginfailure primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentLoginfailures studentLoginfailure
 	 */
	public function insert($studentLoginfailure);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentLoginfailures studentLoginfailure
 	 */
	public function update($studentLoginfailure);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByFailureCount($value);

	public function queryByLockoutUntil($value);


	public function deleteByUserId($value);

	public function deleteByFailureCount($value);

	public function deleteByLockoutUntil($value);


}
?>