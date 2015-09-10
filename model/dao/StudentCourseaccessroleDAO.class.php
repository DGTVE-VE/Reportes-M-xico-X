<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentCourseaccessroleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentCourseaccessrole 
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
 	 * @param studentCourseaccessrole primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseaccessrole studentCourseaccessrole
 	 */
	public function insert($studentCourseaccessrole);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseaccessrole studentCourseaccessrole
 	 */
	public function update($studentCourseaccessrole);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByOrg($value);

	public function queryByCourseId($value);

	public function queryByRole($value);


	public function deleteByUserId($value);

	public function deleteByOrg($value);

	public function deleteByCourseId($value);

	public function deleteByRole($value);


}
?>