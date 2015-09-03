<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface UserApiUserpreferenceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserApiUserpreference 
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
 	 * @param userApiUserpreference primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserApiUserpreference userApiUserpreference
 	 */
	public function insert($userApiUserpreference);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserApiUserpreference userApiUserpreference
 	 */
	public function update($userApiUserpreference);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByKey($value);

	public function queryByValue($value);


	public function deleteByUserId($value);

	public function deleteByKey($value);

	public function deleteByValue($value);


}
?>