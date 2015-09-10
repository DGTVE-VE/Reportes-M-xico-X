<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjceleryWorkerstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjceleryWorkerstate 
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
 	 * @param djceleryWorkerstate primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryWorkerstate djceleryWorkerstate
 	 */
	public function insert($djceleryWorkerstate);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryWorkerstate djceleryWorkerstate
 	 */
	public function update($djceleryWorkerstate);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByHostname($value);

	public function queryByLastHeartbeat($value);


	public function deleteByHostname($value);

	public function deleteByLastHeartbeat($value);


}
?>