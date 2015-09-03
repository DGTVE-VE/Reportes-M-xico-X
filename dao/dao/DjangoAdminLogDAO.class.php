<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoAdminLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoAdminLog 
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
 	 * @param djangoAdminLog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoAdminLog djangoAdminLog
 	 */
	public function insert($djangoAdminLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoAdminLog djangoAdminLog
 	 */
	public function update($djangoAdminLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByActionTime($value);

	public function queryByUserId($value);

	public function queryByContentTypeId($value);

	public function queryByObjectId($value);

	public function queryByObjectRepr($value);

	public function queryByActionFlag($value);

	public function queryByChangeMessage($value);


	public function deleteByActionTime($value);

	public function deleteByUserId($value);

	public function deleteByContentTypeId($value);

	public function deleteByObjectId($value);

	public function deleteByObjectRepr($value);

	public function deleteByActionFlag($value);

	public function deleteByChangeMessage($value);


}
?>