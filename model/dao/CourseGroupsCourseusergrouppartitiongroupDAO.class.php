<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseGroupsCourseusergrouppartitiongroupDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseGroupsCourseusergrouppartitiongroup 
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
 	 * @param courseGroupsCourseusergrouppartitiongroup primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergrouppartitiongroup courseGroupsCourseusergrouppartitiongroup
 	 */
	public function insert($courseGroupsCourseusergrouppartitiongroup);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergrouppartitiongroup courseGroupsCourseusergrouppartitiongroup
 	 */
	public function update($courseGroupsCourseusergrouppartitiongroup);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseUserGroupId($value);

	public function queryByPartitionId($value);

	public function queryByGroupId($value);

	public function queryByCreatedAt($value);

	public function queryByUpdatedAt($value);


	public function deleteByCourseUserGroupId($value);

	public function deleteByPartitionId($value);

	public function deleteByGroupId($value);

	public function deleteByCreatedAt($value);

	public function deleteByUpdatedAt($value);


}
?>