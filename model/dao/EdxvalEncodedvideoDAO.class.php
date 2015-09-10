<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EdxvalEncodedvideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EdxvalEncodedvideo 
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
 	 * @param edxvalEncodedvideo primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalEncodedvideo edxvalEncodedvideo
 	 */
	public function insert($edxvalEncodedvideo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalEncodedvideo edxvalEncodedvideo
 	 */
	public function update($edxvalEncodedvideo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByUrl($value);

	public function queryByFileSize($value);

	public function queryByBitrate($value);

	public function queryByProfileId($value);

	public function queryByVideoId($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByUrl($value);

	public function deleteByFileSize($value);

	public function deleteByBitrate($value);

	public function deleteByProfileId($value);

	public function deleteByVideoId($value);


}
?>