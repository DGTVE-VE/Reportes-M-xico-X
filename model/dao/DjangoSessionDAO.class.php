<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoSessionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoSession 
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
 	 * @param djangoSession primary key
 	 */
	public function delete($session_key);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoSession djangoSession
 	 */
	public function insert($djangoSession);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoSession djangoSession
 	 */
	public function update($djangoSession);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySessionData($value);

	public function queryByExpireDate($value);


	public function deleteBySessionData($value);

	public function deleteByExpireDate($value);


}
?>