<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoOpenidAuthNonceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoOpenidAuthNonce 
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
 	 * @param djangoOpenidAuthNonce primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoOpenidAuthNonce djangoOpenidAuthNonce
 	 */
	public function insert($djangoOpenidAuthNonce);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoOpenidAuthNonce djangoOpenidAuthNonce
 	 */
	public function update($djangoOpenidAuthNonce);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByServerUrl($value);

	public function queryByTimestamp($value);

	public function queryBySalt($value);


	public function deleteByServerUrl($value);

	public function deleteByTimestamp($value);

	public function deleteBySalt($value);


}
?>