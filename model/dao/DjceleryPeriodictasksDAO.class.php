<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjceleryPeriodictasksDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjceleryPeriodictasks 
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
 	 * @param djceleryPeriodictask primary key
 	 */
	public function delete($ident);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryPeriodictasks djceleryPeriodictask
 	 */
	public function insert($djceleryPeriodictask);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryPeriodictasks djceleryPeriodictask
 	 */
	public function update($djceleryPeriodictask);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLastUpdate($value);


	public function deleteByLastUpdate($value);


}
?>