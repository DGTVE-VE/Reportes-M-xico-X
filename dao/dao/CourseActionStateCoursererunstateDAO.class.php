<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseActionStateCoursererunstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseActionStateCoursererunstate 
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
 	 * @param courseActionStateCoursererunstate primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseActionStateCoursererunstate courseActionStateCoursererunstate
 	 */
	public function insert($courseActionStateCoursererunstate);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseActionStateCoursererunstate courseActionStateCoursererunstate
 	 */
	public function update($courseActionStateCoursererunstate);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreatedTime($value);

	public function queryByUpdatedTime($value);

	public function queryByCreatedUserId($value);

	public function queryByUpdatedUserId($value);

	public function queryByCourseKey($value);

	public function queryByAction($value);

	public function queryByState($value);

	public function queryByShouldDisplay($value);

	public function queryByMessage($value);

	public function queryBySourceCourseKey($value);

	public function queryByDisplayName($value);


	public function deleteByCreatedTime($value);

	public function deleteByUpdatedTime($value);

	public function deleteByCreatedUserId($value);

	public function deleteByUpdatedUserId($value);

	public function deleteByCourseKey($value);

	public function deleteByAction($value);

	public function deleteByState($value);

	public function deleteByShouldDisplay($value);

	public function deleteByMessage($value);

	public function deleteBySourceCourseKey($value);

	public function deleteByDisplayName($value);


}
?>