<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiAttachmentrevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiAttachmentrevision 
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
 	 * @param wikiAttachmentrevision primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiAttachmentrevision wikiAttachmentrevision
 	 */
	public function insert($wikiAttachmentrevision);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiAttachmentrevision wikiAttachmentrevision
 	 */
	public function update($wikiAttachmentrevision);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRevisionNumber($value);

	public function queryByUserMessage($value);

	public function queryByAutomaticLog($value);

	public function queryByIpAddress($value);

	public function queryByUserId($value);

	public function queryByModified($value);

	public function queryByCreated($value);

	public function queryByPreviousRevisionId($value);

	public function queryByDeleted($value);

	public function queryByLocked($value);

	public function queryByAttachmentId($value);

	public function queryByFile($value);

	public function queryByDescription($value);


	public function deleteByRevisionNumber($value);

	public function deleteByUserMessage($value);

	public function deleteByAutomaticLog($value);

	public function deleteByIpAddress($value);

	public function deleteByUserId($value);

	public function deleteByModified($value);

	public function deleteByCreated($value);

	public function deleteByPreviousRevisionId($value);

	public function deleteByDeleted($value);

	public function deleteByLocked($value);

	public function deleteByAttachmentId($value);

	public function deleteByFile($value);

	public function deleteByDescription($value);


}
?>