<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoCommentClientRoleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoCommentClientRole 
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
 	 * @param djangoCommentClientRole primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientRole djangoCommentClientRole
 	 */
	public function insert($djangoCommentClientRole);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientRole djangoCommentClientRole
 	 */
	public function update($djangoCommentClientRole);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByCourseId($value);


	public function deleteByName($value);

	public function deleteByCourseId($value);


}
?>