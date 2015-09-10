<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ReverificationMidcoursereverificationwindowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ReverificationMidcoursereverificationwindow 
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
 	 * @param reverificationMidcoursereverificationwindow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ReverificationMidcoursereverificationwindow reverificationMidcoursereverificationwindow
 	 */
	public function insert($reverificationMidcoursereverificationwindow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ReverificationMidcoursereverificationwindow reverificationMidcoursereverificationwindow
 	 */
	public function update($reverificationMidcoursereverificationwindow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByStartDate($value);

	public function queryByEndDate($value);


	public function deleteByCourseId($value);

	public function deleteByStartDate($value);

	public function deleteByEndDate($value);


}
?>