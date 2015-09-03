<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentPendingnamechangeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentPendingnamechange 
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
 	 * @param studentPendingnamechange primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentPendingnamechange studentPendingnamechange
 	 */
	public function insert($studentPendingnamechange);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentPendingnamechange studentPendingnamechange
 	 */
	public function update($studentPendingnamechange);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByNewName($value);

	public function queryByRationale($value);


	public function deleteByUserId($value);

	public function deleteByNewName($value);

	public function deleteByRationale($value);


}
?>