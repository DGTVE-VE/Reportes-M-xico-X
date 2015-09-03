<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface BulkEmailCourseauthorizationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BulkEmailCourseauthorization 
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
 	 * @param bulkEmailCourseauthorization primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseauthorization bulkEmailCourseauthorization
 	 */
	public function insert($bulkEmailCourseauthorization);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseauthorization bulkEmailCourseauthorization
 	 */
	public function update($bulkEmailCourseauthorization);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByEmailEnabled($value);


	public function deleteByCourseId($value);

	public function deleteByEmailEnabled($value);


}
?>