<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareOfflinecomputedgradeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareOfflinecomputedgrade 
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
 	 * @param coursewareOfflinecomputedgrade primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareOfflinecomputedgrade coursewareOfflinecomputedgrade
 	 */
	public function insert($coursewareOfflinecomputedgrade);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareOfflinecomputedgrade coursewareOfflinecomputedgrade
 	 */
	public function update($coursewareOfflinecomputedgrade);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCourseId($value);

	public function queryByCreated($value);

	public function queryByUpdated($value);

	public function queryByGradeset($value);


	public function deleteByUserId($value);

	public function deleteByCourseId($value);

	public function deleteByCreated($value);

	public function deleteByUpdated($value);

	public function deleteByGradeset($value);


}
?>