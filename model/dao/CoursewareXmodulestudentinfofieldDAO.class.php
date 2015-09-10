<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareXmodulestudentinfofieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareXmodulestudentinfofield 
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
 	 * @param coursewareXmodulestudentinfofield primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmodulestudentinfofield coursewareXmodulestudentinfofield
 	 */
	public function insert($coursewareXmodulestudentinfofield);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmodulestudentinfofield coursewareXmodulestudentinfofield
 	 */
	public function update($coursewareXmodulestudentinfofield);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFieldName($value);

	public function queryByValue($value);

	public function queryByStudentId($value);

	public function queryByCreated($value);

	public function queryByModified($value);


	public function deleteByFieldName($value);

	public function deleteByValue($value);

	public function deleteByStudentId($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);


}
?>