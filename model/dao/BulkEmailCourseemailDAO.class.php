<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface BulkEmailCourseemailDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BulkEmailCourseemail 
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
 	 * @param bulkEmailCourseemail primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseemail bulkEmailCourseemail
 	 */
	public function insert($bulkEmailCourseemail);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseemail bulkEmailCourseemail
 	 */
	public function update($bulkEmailCourseemail);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySenderId($value);

	public function queryBySlug($value);

	public function queryBySubject($value);

	public function queryByHtmlMessage($value);

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByCourseId($value);

	public function queryByToOption($value);

	public function queryByTextMessage($value);

	public function queryByTemplateName($value);

	public function queryByFromAddr($value);


	public function deleteBySenderId($value);

	public function deleteBySlug($value);

	public function deleteBySubject($value);

	public function deleteByHtmlMessage($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByCourseId($value);

	public function deleteByToOption($value);

	public function deleteByTextMessage($value);

	public function deleteByTemplateName($value);

	public function deleteByFromAddr($value);


}
?>