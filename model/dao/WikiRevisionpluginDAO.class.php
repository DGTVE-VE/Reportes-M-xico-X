<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiRevisionpluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiRevisionplugin 
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
 	 * @param wikiRevisionplugin primary key
 	 */
	public function delete($articleplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiRevisionplugin wikiRevisionplugin
 	 */
	public function insert($wikiRevisionplugin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiRevisionplugin wikiRevisionplugin
 	 */
	public function update($wikiRevisionplugin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCurrentRevisionId($value);


	public function deleteByCurrentRevisionId($value);


}
?>