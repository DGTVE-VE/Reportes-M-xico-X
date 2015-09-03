<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjceleryPeriodictaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjceleryPeriodictask 
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
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryPeriodictask djceleryPeriodictask
 	 */
	public function insert($djceleryPeriodictask);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryPeriodictask djceleryPeriodictask
 	 */
	public function update($djceleryPeriodictask);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByTask($value);

	public function queryByIntervalId($value);

	public function queryByCrontabId($value);

	public function queryByArgs($value);

	public function queryByKwargs($value);

	public function queryByQueue($value);

	public function queryByExchange($value);

	public function queryByRoutingKey($value);

	public function queryByExpires($value);

	public function queryByEnabled($value);

	public function queryByLastRunAt($value);

	public function queryByTotalRunCount($value);

	public function queryByDateChanged($value);

	public function queryByDescription($value);


	public function deleteByName($value);

	public function deleteByTask($value);

	public function deleteByIntervalId($value);

	public function deleteByCrontabId($value);

	public function deleteByArgs($value);

	public function deleteByKwargs($value);

	public function deleteByQueue($value);

	public function deleteByExchange($value);

	public function deleteByRoutingKey($value);

	public function deleteByExpires($value);

	public function deleteByEnabled($value);

	public function deleteByLastRunAt($value);

	public function deleteByTotalRunCount($value);

	public function deleteByDateChanged($value);

	public function deleteByDescription($value);


}
?>