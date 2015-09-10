<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentPasswordhistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentPasswordhistory 
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
 	 * @param studentPasswordhistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentPasswordhistory studentPasswordhistory
 	 */
	public function insert($studentPasswordhistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentPasswordhistory studentPasswordhistory
 	 */
	public function update($studentPasswordhistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByPassword($value);

	public function queryByTimeSet($value);


	public function deleteByUserId($value);

	public function deleteByPassword($value);

	public function deleteByTimeSet($value);


}
?>