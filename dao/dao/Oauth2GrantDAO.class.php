<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface Oauth2GrantDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Oauth2Grant 
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
 	 * @param oauth2Grant primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2Grant oauth2Grant
 	 */
	public function insert($oauth2Grant);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2Grant oauth2Grant
 	 */
	public function update($oauth2Grant);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByClientId($value);

	public function queryByCode($value);

	public function queryByExpires($value);

	public function queryByRedirectUri($value);

	public function queryByScope($value);


	public function deleteByUserId($value);

	public function deleteByClientId($value);

	public function deleteByCode($value);

	public function deleteByExpires($value);

	public function deleteByRedirectUri($value);

	public function deleteByScope($value);


}
?>