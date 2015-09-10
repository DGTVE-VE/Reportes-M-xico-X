<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthUserGroupsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthUserGroups 
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
 	 * @param authUserGroup primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserGroups authUserGroup
 	 */
	public function insert($authUserGroup);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserGroups authUserGroup
 	 */
	public function update($authUserGroup);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByGroupId($value);


	public function deleteByUserId($value);

	public function deleteByGroupId($value);


}
?>