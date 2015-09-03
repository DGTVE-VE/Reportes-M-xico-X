<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentUsertestgroupDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentUsertestgroup 
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
 	 * @param studentUsertestgroup primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUsertestgroup studentUsertestgroup
 	 */
	public function insert($studentUsertestgroup);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUsertestgroup studentUsertestgroup
 	 */
	public function update($studentUsertestgroup);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByDescription($value);


	public function deleteByName($value);

	public function deleteByDescription($value);


}
?>