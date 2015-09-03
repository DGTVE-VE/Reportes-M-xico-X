<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiArticleforobjectDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiArticleforobject 
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
 	 * @param wikiArticleforobject primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticleforobject wikiArticleforobject
 	 */
	public function insert($wikiArticleforobject);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticleforobject wikiArticleforobject
 	 */
	public function update($wikiArticleforobject);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByArticleId($value);

	public function queryByContentTypeId($value);

	public function queryByObjectId($value);

	public function queryByIsMptt($value);


	public function deleteByArticleId($value);

	public function deleteByContentTypeId($value);

	public function deleteByObjectId($value);

	public function deleteByIsMptt($value);


}
?>