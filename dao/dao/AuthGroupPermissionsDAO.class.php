<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthGroupPermissionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthGroupPermissions 
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
 	 * @param authGroupPermission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthGroupPermissions authGroupPermission
 	 */
	public function insert($authGroupPermission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthGroupPermissions authGroupPermission
 	 */
	public function update($authGroupPermission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByGroupId($value);

	public function queryByPermissionId($value);


	public function deleteByGroupId($value);

	public function deleteByPermissionId($value);


}
?>