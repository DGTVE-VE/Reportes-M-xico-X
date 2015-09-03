<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseGroupsCourseusergroupDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseGroupsCourseusergroup 
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
 	 * @param courseGroupsCourseusergroup primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergroup courseGroupsCourseusergroup
 	 */
	public function insert($courseGroupsCourseusergroup);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergroup courseGroupsCourseusergroup
 	 */
	public function update($courseGroupsCourseusergroup);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByCourseId($value);

	public function queryByGroupType($value);


	public function deleteByName($value);

	public function deleteByCourseId($value);

	public function deleteByGroupType($value);


}
?>