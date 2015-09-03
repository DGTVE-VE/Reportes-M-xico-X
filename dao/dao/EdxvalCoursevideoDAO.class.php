<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EdxvalCoursevideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EdxvalCoursevideo 
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
 	 * @param edxvalCoursevideo primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalCoursevideo edxvalCoursevideo
 	 */
	public function insert($edxvalCoursevideo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalCoursevideo edxvalCoursevideo
 	 */
	public function update($edxvalCoursevideo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByVideoId($value);


	public function deleteByCourseId($value);

	public function deleteByVideoId($value);


}
?>