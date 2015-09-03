<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareStudentmoduleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareStudentmodule 
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
 	 * @param coursewareStudentmodule primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareStudentmodule coursewareStudentmodule
 	 */
	public function insert($coursewareStudentmodule);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareStudentmodule coursewareStudentmodule
 	 */
	public function update($coursewareStudentmodule);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByModuleType($value);

	public function queryByModuleId($value);

	public function queryByStudentId($value);

	public function queryByState($value);

	public function queryByGrade($value);

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByMaxGrade($value);

	public function queryByDone($value);

	public function queryByCourseId($value);


	public function deleteByModuleType($value);

	public function deleteByModuleId($value);

	public function deleteByStudentId($value);

	public function deleteByState($value);

	public function deleteByGrade($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByMaxGrade($value);

	public function deleteByDone($value);

	public function deleteByCourseId($value);


}
?>