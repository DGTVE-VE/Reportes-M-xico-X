<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseStructuresCoursestructureDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseStructuresCoursestructure 
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
 	 * @param courseStructuresCoursestructure primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseStructuresCoursestructure courseStructuresCoursestructure
 	 */
	public function insert($courseStructuresCoursestructure);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseStructuresCoursestructure courseStructuresCoursestructure
 	 */
	public function update($courseStructuresCoursestructure);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByCourseId($value);

	public function queryByStructureJson($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByCourseId($value);

	public function deleteByStructureJson($value);


}
?>