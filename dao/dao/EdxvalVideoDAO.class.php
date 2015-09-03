<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EdxvalVideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EdxvalVideo 
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
 	 * @param edxvalVideo primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalVideo edxvalVideo
 	 */
	public function insert($edxvalVideo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalVideo edxvalVideo
 	 */
	public function update($edxvalVideo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEdxVideoId($value);

	public function queryByClientVideoId($value);

	public function queryByDuration($value);

	public function queryByCreated($value);

	public function queryByStatus($value);


	public function deleteByEdxVideoId($value);

	public function deleteByClientVideoId($value);

	public function deleteByDuration($value);

	public function deleteByCreated($value);

	public function deleteByStatus($value);


}
?>