<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentCourseenrollmentallowedDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentCourseenrollmentallowed 
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
 	 * @param studentCourseenrollmentallowed primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseenrollmentallowed studentCourseenrollmentallowed
 	 */
	public function insert($studentCourseenrollmentallowed);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseenrollmentallowed studentCourseenrollmentallowed
 	 */
	public function update($studentCourseenrollmentallowed);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEmail($value);

	public function queryByCourseId($value);

	public function queryByCreated($value);

	public function queryByAutoEnroll($value);


	public function deleteByEmail($value);

	public function deleteByCourseId($value);

	public function deleteByCreated($value);

	public function deleteByAutoEnroll($value);


}
?>