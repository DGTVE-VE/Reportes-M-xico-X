<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareXmodulestudentprefsfieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareXmodulestudentprefsfield 
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
 	 * @param coursewareXmodulestudentprefsfield primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmodulestudentprefsfield coursewareXmodulestudentprefsfield
 	 */
	public function insert($coursewareXmodulestudentprefsfield);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmodulestudentprefsfield coursewareXmodulestudentprefsfield
 	 */
	public function update($coursewareXmodulestudentprefsfield);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFieldName($value);

	public function queryByModuleType($value);

	public function queryByValue($value);

	public function queryByStudentId($value);

	public function queryByCreated($value);

	public function queryByModified($value);


	public function deleteByFieldName($value);

	public function deleteByModuleType($value);

	public function deleteByValue($value);

	public function deleteByStudentId($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);


}
?>