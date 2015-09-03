<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiImageDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiImage 
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
 	 * @param wikiImage primary key
 	 */
	public function delete($revisionplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiImage wikiImage
 	 */
	public function insert($wikiImage);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiImage wikiImage
 	 */
	public function update($wikiImage);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>