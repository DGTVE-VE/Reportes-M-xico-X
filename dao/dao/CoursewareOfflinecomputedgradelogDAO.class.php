<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareOfflinecomputedgradelogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareOfflinecomputedgradelog 
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
 	 * @param coursewareOfflinecomputedgradelog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareOfflinecomputedgradelog coursewareOfflinecomputedgradelog
 	 */
	public function insert($coursewareOfflinecomputedgradelog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareOfflinecomputedgradelog coursewareOfflinecomputedgradelog
 	 */
	public function update($coursewareOfflinecomputedgradelog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByCreated($value);

	public function queryBySeconds($value);

	public function queryByNstudents($value);


	public function deleteByCourseId($value);

	public function deleteByCreated($value);

	public function deleteBySeconds($value);

	public function deleteByNstudents($value);


}
?>