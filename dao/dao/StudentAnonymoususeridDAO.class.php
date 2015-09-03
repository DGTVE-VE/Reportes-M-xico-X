<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentAnonymoususeridDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentAnonymoususerid 
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
 	 * @param studentAnonymoususerid primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentAnonymoususerid studentAnonymoususerid
 	 */
	public function insert($studentAnonymoususerid);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentAnonymoususerid studentAnonymoususerid
 	 */
	public function update($studentAnonymoususerid);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByAnonymousUserId($value);

	public function queryByCourseId($value);


	public function deleteByUserId($value);

	public function deleteByAnonymousUserId($value);

	public function deleteByCourseId($value);


}
?>