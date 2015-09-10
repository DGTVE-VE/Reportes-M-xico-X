<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoEmbargoedcourseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoEmbargoedcourse 
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
 	 * @param embargoEmbargoedcourse primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoEmbargoedcourse embargoEmbargoedcourse
 	 */
	public function insert($embargoEmbargoedcourse);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoEmbargoedcourse embargoEmbargoedcourse
 	 */
	public function update($embargoEmbargoedcourse);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByEmbargoed($value);


	public function deleteByCourseId($value);

	public function deleteByEmbargoed($value);


}
?>