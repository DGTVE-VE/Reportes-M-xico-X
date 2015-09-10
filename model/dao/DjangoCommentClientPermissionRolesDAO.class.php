<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjangoCommentClientPermissionRolesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjangoCommentClientPermissionRoles 
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
 	 * @param djangoCommentClientPermissionRole primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoCommentClientPermissionRoles djangoCommentClientPermissionRole
 	 */
	public function insert($djangoCommentClientPermissionRole);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoCommentClientPermissionRoles djangoCommentClientPermissionRole
 	 */
	public function update($djangoCommentClientPermissionRole);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByPermissionId($value);

	public function queryByRoleId($value);


	public function deleteByPermissionId($value);

	public function deleteByRoleId($value);


}
?>