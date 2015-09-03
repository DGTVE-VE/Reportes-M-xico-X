<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiArticlepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiArticleplugin 
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
 	 * @param wikiArticleplugin primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticleplugin wikiArticleplugin
 	 */
	public function insert($wikiArticleplugin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticleplugin wikiArticleplugin
 	 */
	public function update($wikiArticleplugin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByArticleId($value);

	public function queryByDeleted($value);

	public function queryByCreated($value);


	public function deleteByArticleId($value);

	public function deleteByDeleted($value);

	public function deleteByCreated($value);


}
?>