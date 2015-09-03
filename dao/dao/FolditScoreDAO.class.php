<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface FolditScoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FolditScore 
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
 	 * @param folditScore primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FolditScore folditScore
 	 */
	public function insert($folditScore);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FolditScore folditScore
 	 */
	public function update($folditScore);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByUniqueUserId($value);

	public function queryByPuzzleId($value);

	public function queryByBestScore($value);

	public function queryByCurrentScore($value);

	public function queryByScoreVersion($value);

	public function queryByCreated($value);


	public function deleteByUserId($value);

	public function deleteByUniqueUserId($value);

	public function deleteByPuzzleId($value);

	public function deleteByBestScore($value);

	public function deleteByCurrentScore($value);

	public function deleteByScoreVersion($value);

	public function deleteByCreated($value);


}
?>