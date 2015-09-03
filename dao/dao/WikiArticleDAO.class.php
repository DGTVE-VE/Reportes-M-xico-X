<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiArticleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiArticle 
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
 	 * @param wikiArticle primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticle wikiArticle
 	 */
	public function insert($wikiArticle);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticle wikiArticle
 	 */
	public function update($wikiArticle);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCurrentRevisionId($value);

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByOwnerId($value);

	public function queryByGroupId($value);

	public function queryByGroupRead($value);

	public function queryByGroupWrite($value);

	public function queryByOtherRead($value);

	public function queryByOtherWrite($value);


	public function deleteByCurrentRevisionId($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByOwnerId($value);

	public function deleteByGroupId($value);

	public function deleteByGroupRead($value);

	public function deleteByGroupWrite($value);

	public function deleteByOtherRead($value);

	public function deleteByOtherWrite($value);


}
?>