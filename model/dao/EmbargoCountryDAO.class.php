<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoCountryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoCountry 
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
 	 * @param embargoCountry primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoCountry embargoCountry
 	 */
	public function insert($embargoCountry);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoCountry embargoCountry
 	 */
	public function update($embargoCountry);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCountry($value);


	public function deleteByCountry($value);


}
?>