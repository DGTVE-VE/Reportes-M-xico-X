<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseCreatorsCoursecreatorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseCreatorsCoursecreator 
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
 	 * @param courseCreatorsCoursecreator primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseCreatorsCoursecreator courseCreatorsCoursecreator
 	 */
	public function insert($courseCreatorsCoursecreator);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseCreatorsCoursecreator courseCreatorsCoursecreator
 	 */
	public function update($courseCreatorsCoursecreator);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByStateChanged($value);

	public function queryByState($value);

	public function queryByNote($value);


	public function deleteByUserId($value);

	public function deleteByStateChanged($value);

	public function deleteByState($value);

	public function deleteByNote($value);


}
?>