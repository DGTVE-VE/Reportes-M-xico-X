<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CircuitServercircuitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CircuitServercircuit 
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
 	 * @param circuitServercircuit primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CircuitServercircuit circuitServercircuit
 	 */
	public function insert($circuitServercircuit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CircuitServercircuit circuitServercircuit
 	 */
	public function update($circuitServercircuit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryBySchematic($value);


	public function deleteByName($value);

	public function deleteBySchematic($value);


}
?>