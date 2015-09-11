<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseNameDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseName 
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
 	 * @param courseName primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseName courseName
 	 */
	public function insert($courseModesCoursemode);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseName CourseName
 	 */
	public function update($courseName);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByCourseName($value);

	public function deleteByCourseId($value);

	public function deleteByCourseName($value);

}
?>