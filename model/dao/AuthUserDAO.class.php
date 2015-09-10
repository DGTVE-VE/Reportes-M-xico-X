<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthUser 
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
 	 * @param authUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUser authUser
 	 */
	public function insert($authUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUser authUser
 	 */
	public function update($authUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUsername($value);

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByEmail($value);

	public function queryByPassword($value);

	public function queryByIsStaff($value);

	public function queryByIsActive($value);

	public function queryByIsSuperuser($value);

	public function queryByLastLogin($value);

	public function queryByDateJoined($value);


	public function deleteByUsername($value);

	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByEmail($value);

	public function deleteByPassword($value);

	public function deleteByIsStaff($value);

	public function deleteByIsActive($value);

	public function deleteByIsSuperuser($value);

	public function deleteByLastLogin($value);

	public function deleteByDateJoined($value);


}
?>