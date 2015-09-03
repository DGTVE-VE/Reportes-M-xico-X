<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface LmsXblockXblockasidesconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LmsXblockXblockasidesconfig 
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
 	 * @param lmsXblockXblockasidesconfig primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LmsXblockXblockasidesconfig lmsXblockXblockasidesconfig
 	 */
	public function insert($lmsXblockXblockasidesconfig);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LmsXblockXblockasidesconfig lmsXblockXblockasidesconfig
 	 */
	public function update($lmsXblockXblockasidesconfig);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByDisabledBlocks($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByDisabledBlocks($value);


}
?>