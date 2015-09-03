<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SubmissionsStudentitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SubmissionsStudentitem 
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
 	 * @param submissionsStudentitem primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsStudentitem submissionsStudentitem
 	 */
	public function insert($submissionsStudentitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsStudentitem submissionsStudentitem
 	 */
	public function update($submissionsStudentitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentId($value);

	public function queryByCourseId($value);

	public function queryByItemId($value);

	public function queryByItemType($value);


	public function deleteByStudentId($value);

	public function deleteByCourseId($value);

	public function deleteByItemId($value);

	public function deleteByItemType($value);


}
?>