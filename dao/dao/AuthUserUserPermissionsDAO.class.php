<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthUserUserPermissionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthUserUserPermissions 
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
 	 * @param authUserUserPermission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserUserPermissions authUserUserPermission
 	 */
	public function insert($authUserUserPermission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserUserPermissions authUserUserPermission
 	 */
	public function update($authUserUserPermission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByPermissionId($value);


	public function deleteByUserId($value);

	public function deleteByPermissionId($value);


}
?>