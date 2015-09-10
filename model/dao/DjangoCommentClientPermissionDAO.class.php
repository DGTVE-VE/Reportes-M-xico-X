<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoCommentClientPermissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoCommentClientPermission 
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
 	 * @param djangoCommentClientPermission primary key
 	 */
	public function delete($name);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientPermission djangoCommentClientPermission
 	 */
	public function insert($djangoCommentClientPermission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientPermission djangoCommentClientPermission
 	 */
	public function update($djangoCommentClientPermission);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>