<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface BulkEmailOptoutDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BulkEmailOptout 
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
 	 * @param bulkEmailOptout primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailOptout bulkEmailOptout
 	 */
	public function insert($bulkEmailOptout);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailOptout bulkEmailOptout
 	 */
	public function update($bulkEmailOptout);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByUserId($value);


	public function deleteByCourseId($value);

	public function deleteByUserId($value);


}
?>