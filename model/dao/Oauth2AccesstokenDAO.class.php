<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface Oauth2AccesstokenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Oauth2Accesstoken 
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
 	 * @param oauth2Accesstoken primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2Accesstoken oauth2Accesstoken
 	 */
	public function insert($oauth2Accesstoken);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2Accesstoken oauth2Accesstoken
 	 */
	public function update($oauth2Accesstoken);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByToken($value);

	public function queryByClientId($value);

	public function queryByExpires($value);

	public function queryByScope($value);


	public function deleteByUserId($value);

	public function deleteByToken($value);

	public function deleteByClientId($value);

	public function deleteByExpires($value);

	public function deleteByScope($value);


}
?>