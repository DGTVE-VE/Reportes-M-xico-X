<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiSimplepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiSimpleplugin 
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
 	 * @param wikiSimpleplugin primary key
 	 */
	public function delete($articleplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiSimpleplugin wikiSimpleplugin
 	 */
	public function insert($wikiSimpleplugin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiSimpleplugin wikiSimpleplugin
 	 */
	public function update($wikiSimpleplugin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByArticleRevisionId($value);


	public function deleteByArticleRevisionId($value);


}
?>