<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiArticlesubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiArticlesubscription 
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
 	 * @param wikiArticlesubscription primary key
 	 */
	public function delete($articleplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticlesubscription wikiArticlesubscription
 	 */
	public function insert($wikiArticlesubscription);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticlesubscription wikiArticlesubscription
 	 */
	public function update($wikiArticlesubscription);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubscriptionPtrId($value);


	public function deleteBySubscriptionPtrId($value);


}
?>