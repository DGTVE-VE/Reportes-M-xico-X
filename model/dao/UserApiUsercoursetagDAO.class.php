<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface UserApiUsercoursetagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserApiUsercoursetag 
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
 	 * @param userApiUsercoursetag primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserApiUsercoursetag userApiUsercoursetag
 	 */
	public function insert($userApiUsercoursetag);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserApiUsercoursetag userApiUsercoursetag
 	 */
	public function update($userApiUsercoursetag);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByKey($value);

	public function queryByCourseId($value);

	public function queryByValue($value);


	public function deleteByUserId($value);

	public function deleteByKey($value);

	public function deleteByCourseId($value);

	public function deleteByValue($value);


}
?>