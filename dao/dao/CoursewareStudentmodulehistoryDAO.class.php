<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareStudentmodulehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareStudentmodulehistory 
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
 	 * @param coursewareStudentmodulehistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareStudentmodulehistory coursewareStudentmodulehistory
 	 */
	public function insert($coursewareStudentmodulehistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareStudentmodulehistory coursewareStudentmodulehistory
 	 */
	public function update($coursewareStudentmodulehistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentModuleId($value);

	public function queryByVersion($value);

	public function queryByCreated($value);

	public function queryByState($value);

	public function queryByGrade($value);

	public function queryByMaxGrade($value);


	public function deleteByStudentModuleId($value);

	public function deleteByVersion($value);

	public function deleteByCreated($value);

	public function deleteByState($value);

	public function deleteByGrade($value);

	public function deleteByMaxGrade($value);


}
?>