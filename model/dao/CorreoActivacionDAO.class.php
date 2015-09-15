<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CorreoActivacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CorreoActivacion 
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
 	 * @param CorreoActivacion primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CorreoActivacion correoActivacion
 	 */
	public function insert($correoactivacion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CorreoActivacion correoactivacion
 	 */
	public function update($correoactivacion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCorreo($value);

	public function queryByHash($value);


        public function deleteByCorreo($value);

	public function deleteByHash($value);
}
?>