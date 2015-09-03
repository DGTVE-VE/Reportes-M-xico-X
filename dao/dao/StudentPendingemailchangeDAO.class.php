<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentPendingemailchangeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentPendingemailchange 
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
 	 * @param studentPendingemailchange primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentPendingemailchange studentPendingemailchange
 	 */
	public function insert($studentPendingemailchange);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentPendingemailchange studentPendingemailchange
 	 */
	public function update($studentPendingemailchange);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByNewEmail($value);

	public function queryByActivationKey($value);


	public function deleteByUserId($value);

	public function deleteByNewEmail($value);

	public function deleteByActivationKey($value);


}
?>