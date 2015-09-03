<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoSiteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoSite 
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
 	 * @param djangoSite primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoSite djangoSite
 	 */
	public function insert($djangoSite);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoSite djangoSite
 	 */
	public function update($djangoSite);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDomain($value);

	public function queryByName($value);


	public function deleteByDomain($value);

	public function deleteByName($value);


}
?>