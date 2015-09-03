<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface Oauth2RefreshtokenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Oauth2Refreshtoken 
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
 	 * @param oauth2Refreshtoken primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2Refreshtoken oauth2Refreshtoken
 	 */
	public function insert($oauth2Refreshtoken);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2Refreshtoken oauth2Refreshtoken
 	 */
	public function update($oauth2Refreshtoken);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByToken($value);

	public function queryByAccessTokenId($value);

	public function queryByClientId($value);

	public function queryByExpired($value);


	public function deleteByUserId($value);

	public function deleteByToken($value);

	public function deleteByAccessTokenId($value);

	public function deleteByClientId($value);

	public function deleteByExpired($value);


}
?>