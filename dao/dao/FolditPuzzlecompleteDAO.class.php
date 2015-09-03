<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface FolditPuzzlecompleteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FolditPuzzlecomplete 
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
 	 * @param folditPuzzlecomplete primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FolditPuzzlecomplete folditPuzzlecomplete
 	 */
	public function insert($folditPuzzlecomplete);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FolditPuzzlecomplete folditPuzzlecomplete
 	 */
	public function update($folditPuzzlecomplete);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByUniqueUserId($value);

	public function queryByPuzzleId($value);

	public function queryByPuzzleSet($value);

	public function queryByPuzzleSubset($value);

	public function queryByCreated($value);


	public function deleteByUserId($value);

	public function deleteByUniqueUserId($value);

	public function deleteByPuzzleId($value);

	public function deleteByPuzzleSet($value);

	public function deleteByPuzzleSubset($value);

	public function deleteByCreated($value);


}
?>