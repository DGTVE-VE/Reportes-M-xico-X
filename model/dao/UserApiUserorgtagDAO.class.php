<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface UserApiUserorgtagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserApiUserorgtag 
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
 	 * @param userApiUserorgtag primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserApiUserorgtag userApiUserorgtag
 	 */
	public function insert($userApiUserorgtag);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserApiUserorgtag userApiUserorgtag
 	 */
	public function update($userApiUserorgtag);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByUserId($value);

	public function queryByKey($value);

	public function queryByOrg($value);

	public function queryByValue($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByUserId($value);

	public function deleteByKey($value);

	public function deleteByOrg($value);

	public function deleteByValue($value);


}
?>