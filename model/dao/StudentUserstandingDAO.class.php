<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentUserstandingDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentUserstanding 
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
 	 * @param studentUserstanding primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUserstanding studentUserstanding
 	 */
	public function insert($studentUserstanding);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUserstanding studentUserstanding
 	 */
	public function update($studentUserstanding);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByAccountStatus($value);

	public function queryByChangedById($value);

	public function queryByStandingLastChangedAt($value);


	public function deleteByUserId($value);

	public function deleteByAccountStatus($value);

	public function deleteByChangedById($value);

	public function deleteByStandingLastChangedAt($value);


}
?>