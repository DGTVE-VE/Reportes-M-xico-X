<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface Oauth2ProviderTrustedclientDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Oauth2ProviderTrustedclient 
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
 	 * @param oauth2ProviderTrustedclient primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Oauth2ProviderTrustedclient oauth2ProviderTrustedclient
 	 */
	public function insert($oauth2ProviderTrustedclient);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Oauth2ProviderTrustedclient oauth2ProviderTrustedclient
 	 */
	public function update($oauth2ProviderTrustedclient);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByClientId($value);


	public function deleteByClientId($value);


}
?>