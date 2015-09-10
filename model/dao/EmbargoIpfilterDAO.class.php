<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoIpfilterDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoIpfilter 
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
 	 * @param embargoIpfilter primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoIpfilter embargoIpfilter
 	 */
	public function insert($embargoIpfilter);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoIpfilter embargoIpfilter
 	 */
	public function update($embargoIpfilter);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByWhitelist($value);

	public function queryByBlacklist($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByWhitelist($value);

	public function deleteByBlacklist($value);


}
?>