<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiAttachmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiAttachment 
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
 	 * @param wikiAttachment primary key
 	 */
	public function delete($reusableplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiAttachment wikiAttachment
 	 */
	public function insert($wikiAttachment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiAttachment wikiAttachment
 	 */
	public function update($wikiAttachment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCurrentRevisionId($value);

	public function queryByOriginalFilename($value);


	public function deleteByCurrentRevisionId($value);

	public function deleteByOriginalFilename($value);


}
?>