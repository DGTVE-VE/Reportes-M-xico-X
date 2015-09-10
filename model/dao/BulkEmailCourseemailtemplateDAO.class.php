<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface BulkEmailCourseemailtemplateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BulkEmailCourseemailtemplate 
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
 	 * @param bulkEmailCourseemailtemplate primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseemailtemplate bulkEmailCourseemailtemplate
 	 */
	public function insert($bulkEmailCourseemailtemplate);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseemailtemplate bulkEmailCourseemailtemplate
 	 */
	public function update($bulkEmailCourseemailtemplate);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByHtmlTemplate($value);

	public function queryByPlainTemplate($value);

	public function queryByName($value);


	public function deleteByHtmlTemplate($value);

	public function deleteByPlainTemplate($value);

	public function deleteByName($value);


}
?>