<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentCourseenrollmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentCourseenrollment 
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
 	 * @param studentCourseenrollment primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseenrollment studentCourseenrollment
 	 */
	public function insert($studentCourseenrollment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseenrollment studentCourseenrollment
 	 */
	public function update($studentCourseenrollment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCourseId($value);

	public function queryByCreated($value);

	public function queryByIsActive($value);

	public function queryByMode($value);


	public function deleteByUserId($value);

	public function deleteByCourseId($value);

	public function deleteByCreated($value);

	public function deleteByIsActive($value);

	public function deleteByMode($value);


}
?>