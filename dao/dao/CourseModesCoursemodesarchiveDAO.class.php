<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CourseModesCoursemodesarchiveDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CourseModesCoursemodesarchive 
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
 	 * @param courseModesCoursemodesarchive primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseModesCoursemodesarchive courseModesCoursemodesarchive
 	 */
	public function insert($courseModesCoursemodesarchive);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseModesCoursemodesarchive courseModesCoursemodesarchive
 	 */
	public function update($courseModesCoursemodesarchive);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByModeSlug($value);

	public function queryByModeDisplayName($value);

	public function queryByMinPrice($value);

	public function queryBySuggestedPrices($value);

	public function queryByCurrency($value);

	public function queryByExpirationDate($value);

	public function queryByExpirationDatetime($value);


	public function deleteByCourseId($value);

	public function deleteByModeSlug($value);

	public function deleteByModeDisplayName($value);

	public function deleteByMinPrice($value);

	public function deleteBySuggestedPrices($value);

	public function deleteByCurrency($value);

	public function deleteByExpirationDate($value);

	public function deleteByExpirationDatetime($value);


}
?>