<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseGroupsCourseusergroupUsersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseGroupsCourseusergroupUsers 
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
 	 * @param courseGroupsCourseusergroupUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergroupUsers courseGroupsCourseusergroupUser
 	 */
	public function insert($courseGroupsCourseusergroupUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergroupUsers courseGroupsCourseusergroupUser
 	 */
	public function update($courseGroupsCourseusergroupUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseusergroupId($value);

	public function queryByUserId($value);


	public function deleteByCourseusergroupId($value);

	public function deleteByUserId($value);


}
?>