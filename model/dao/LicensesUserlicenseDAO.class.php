<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface LicensesUserlicenseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LicensesUserlicense 
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
 	 * @param licensesUserlicense primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LicensesUserlicense licensesUserlicense
 	 */
	public function insert($licensesUserlicense);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LicensesUserlicense licensesUserlicense
 	 */
	public function update($licensesUserlicense);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySoftwareId($value);

	public function queryByUserId($value);

	public function queryBySerial($value);


	public function deleteBySoftwareId($value);

	public function deleteByUserId($value);

	public function deleteBySerial($value);


}
?>