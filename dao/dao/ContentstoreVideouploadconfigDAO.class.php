<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ContentstoreVideouploadconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ContentstoreVideouploadconfig 
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
 	 * @param contentstoreVideouploadconfig primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ContentstoreVideouploadconfig contentstoreVideouploadconfig
 	 */
	public function insert($contentstoreVideouploadconfig);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ContentstoreVideouploadconfig contentstoreVideouploadconfig
 	 */
	public function update($contentstoreVideouploadconfig);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByProfileWhitelist($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByProfileWhitelist($value);


}
?>