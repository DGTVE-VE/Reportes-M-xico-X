<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface Oauth2ClientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Oauth2Client 
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
 	 * @param oauth2Client primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2Client oauth2Client
 	 */
	public function insert($oauth2Client);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2Client oauth2Client
 	 */
	public function update($oauth2Client);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByUrl($value);

	public function queryByRedirectUri($value);

	public function queryByClientId($value);

	public function queryByClientSecret($value);

	public function queryByClientType($value);

	public function queryByName($value);


	public function deleteByUserId($value);

	public function deleteByUrl($value);

	public function deleteByRedirectUri($value);

	public function deleteByClientId($value);

	public function deleteByClientSecret($value);

	public function deleteByClientType($value);

	public function deleteByName($value);


}
?>