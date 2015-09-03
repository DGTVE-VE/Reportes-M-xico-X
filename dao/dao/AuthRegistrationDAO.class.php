<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthRegistrationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthRegistration 
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
 	 * @param authRegistration primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthRegistration authRegistration
 	 */
	public function insert($authRegistration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthRegistration authRegistration
 	 */
	public function update($authRegistration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByActivationKey($value);


	public function deleteByUserId($value);

	public function deleteByActivationKey($value);


}
?>