<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiUrlpathDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiUrlpath 
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
 	 * @param wikiUrlpath primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiUrlpath wikiUrlpath
 	 */
	public function insert($wikiUrlpath);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiUrlpath wikiUrlpath
 	 */
	public function update($wikiUrlpath);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySlug($value);

	public function queryBySiteId($value);

	public function queryByParentId($value);

	public function queryByLft($value);

	public function queryByRght($value);

	public function queryByTreeId($value);

	public function queryByLevel($value);

	public function queryByArticleId($value);


	public function deleteBySlug($value);

	public function deleteBySiteId($value);

	public function deleteByParentId($value);

	public function deleteByLft($value);

	public function deleteByRght($value);

	public function deleteByTreeId($value);

	public function deleteByLevel($value);

	public function deleteByArticleId($value);


}
?>