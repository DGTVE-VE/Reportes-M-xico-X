<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiReusablepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiReusableplugin 
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
 	 * @param wikiReusableplugin primary key
 	 */
	public function delete($articleplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiReusableplugin wikiReusableplugin
 	 */
	public function insert($wikiReusableplugin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiReusableplugin wikiReusableplugin
 	 */
	public function update($wikiReusableplugin);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>