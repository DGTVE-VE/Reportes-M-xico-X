<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoOpenidAuthAssociationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoOpenidAuthAssociation 
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
 	 * @param djangoOpenidAuthAssociation primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoOpenidAuthAssociation djangoOpenidAuthAssociation
 	 */
	public function insert($djangoOpenidAuthAssociation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoOpenidAuthAssociation djangoOpenidAuthAssociation
 	 */
	public function update($djangoOpenidAuthAssociation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByServerUrl($value);

	public function queryByHandle($value);

	public function queryBySecret($value);

	public function queryByIssued($value);

	public function queryByLifetime($value);

	public function queryByAssocType($value);


	public function deleteByServerUrl($value);

	public function deleteByHandle($value);

	public function deleteBySecret($value);

	public function deleteByIssued($value);

	public function deleteByLifetime($value);

	public function deleteByAssocType($value);


}
?>