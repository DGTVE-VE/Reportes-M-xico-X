<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface UtilRatelimitconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UtilRatelimitconfiguration 
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
 	 * @param utilRatelimitconfiguration primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UtilRatelimitconfiguration utilRatelimitconfiguration
 	 */
	public function insert($utilRatelimitconfiguration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UtilRatelimitconfiguration utilRatelimitconfiguration
 	 */
	public function update($utilRatelimitconfiguration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);


}
?>