<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentUsersignupsourceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentUsersignupsource 
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
 	 * @param studentUsersignupsource primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUsersignupsource studentUsersignupsource
 	 */
	public function insert($studentUsersignupsource);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUsersignupsource studentUsersignupsource
 	 */
	public function update($studentUsersignupsource);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySite($value);

	public function queryByUserId($value);


	public function deleteBySite($value);

	public function deleteByUserId($value);


}
?>