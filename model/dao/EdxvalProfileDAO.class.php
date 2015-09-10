<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EdxvalProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EdxvalProfile 
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
 	 * @param edxvalProfile primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalProfile edxvalProfile
 	 */
	public function insert($edxvalProfile);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalProfile edxvalProfile
 	 */
	public function update($edxvalProfile);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByProfileName($value);

	public function queryByExtension($value);

	public function queryByWidth($value);

	public function queryByHeight($value);


	public function deleteByProfileName($value);

	public function deleteByExtension($value);

	public function deleteByWidth($value);

	public function deleteByHeight($value);


}
?>