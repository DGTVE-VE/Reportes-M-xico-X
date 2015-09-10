<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthPermissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthPermission 
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
 	 * @param authPermission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthPermission authPermission
 	 */
	public function insert($authPermission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthPermission authPermission
 	 */
	public function update($authPermission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByContentTypeId($value);

	public function queryByCodename($value);


	public function deleteByName($value);

	public function deleteByContentTypeId($value);

	public function deleteByCodename($value);


}
?>