<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CoursewareXmoduleuserstatesummaryfieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CoursewareXmoduleuserstatesummaryfield 
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
 	 * @param coursewareXmoduleuserstatesummaryfield primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmoduleuserstatesummaryfield coursewareXmoduleuserstatesummaryfield
 	 */
	public function insert($coursewareXmoduleuserstatesummaryfield);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmoduleuserstatesummaryfield coursewareXmoduleuserstatesummaryfield
 	 */
	public function update($coursewareXmoduleuserstatesummaryfield);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFieldName($value);

	public function queryByUsageId($value);

	public function queryByValue($value);

	public function queryByCreated($value);

	public function queryByModified($value);


	public function deleteByFieldName($value);

	public function deleteByUsageId($value);

	public function deleteByValue($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);


}
?>