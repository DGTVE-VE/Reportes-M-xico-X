<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiReusablepluginArticlesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiReusablepluginArticles 
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
 	 * @param wikiReusablepluginArticle primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiReusablepluginArticles wikiReusablepluginArticle
 	 */
	public function insert($wikiReusablepluginArticle);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiReusablepluginArticles wikiReusablepluginArticle
 	 */
	public function update($wikiReusablepluginArticle);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByReusablepluginId($value);

	public function queryByArticleId($value);


	public function deleteByReusablepluginId($value);

	public function deleteByArticleId($value);


}
?>