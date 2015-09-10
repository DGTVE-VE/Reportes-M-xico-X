<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiImagerevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiImagerevision 
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
 	 * @param wikiImagerevision primary key
 	 */
	public function delete($revisionpluginrevision_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiImagerevision wikiImagerevision
 	 */
	public function insert($wikiImagerevision);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiImagerevision wikiImagerevision
 	 */
	public function update($wikiImagerevision);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByImage($value);

	public function queryByWidth($value);

	public function queryByHeight($value);


	public function deleteByImage($value);

	public function deleteByWidth($value);

	public function deleteByHeight($value);


}
?>