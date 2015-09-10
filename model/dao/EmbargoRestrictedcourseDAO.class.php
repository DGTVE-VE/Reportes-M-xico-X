<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoRestrictedcourseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoRestrictedcourse 
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
 	 * @param embargoRestrictedcourse primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoRestrictedcourse embargoRestrictedcourse
 	 */
	public function insert($embargoRestrictedcourse);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoRestrictedcourse embargoRestrictedcourse
 	 */
	public function update($embargoRestrictedcourse);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseKey($value);

	public function queryByEnrollMsgKey($value);

	public function queryByAccessMsgKey($value);


	public function deleteByCourseKey($value);

	public function deleteByEnrollMsgKey($value);

	public function deleteByAccessMsgKey($value);


}
?>