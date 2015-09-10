<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentUsertestgroupUsersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentUsertestgroupUsers 
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
 	 * @param studentUsertestgroupUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUsertestgroupUsers studentUsertestgroupUser
 	 */
	public function insert($studentUsertestgroupUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUsertestgroupUsers studentUsertestgroupUser
 	 */
	public function update($studentUsertestgroupUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUsertestgroupId($value);

	public function queryByUserId($value);


	public function deleteByUsertestgroupId($value);

	public function deleteByUserId($value);


}
?>