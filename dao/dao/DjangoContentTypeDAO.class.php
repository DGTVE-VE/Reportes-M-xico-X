<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoContentTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoContentType 
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
 	 * @param djangoContentType primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoContentType djangoContentType
 	 */
	public function insert($djangoContentType);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoContentType djangoContentType
 	 */
	public function update($djangoContentType);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByAppLabel($value);

	public function queryByModel($value);


	public function deleteByName($value);

	public function deleteByAppLabel($value);

	public function deleteByModel($value);


}
?>