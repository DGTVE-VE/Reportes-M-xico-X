<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoCourseaccessrulehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoCourseaccessrulehistory 
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
 	 * @param embargoCourseaccessrulehistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoCourseaccessrulehistory embargoCourseaccessrulehistory
 	 */
	public function insert($embargoCourseaccessrulehistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoCourseaccessrulehistory embargoCourseaccessrulehistory
 	 */
	public function update($embargoCourseaccessrulehistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTimestamp($value);

	public function queryByCourseKey($value);

	public function queryBySnapshot($value);


	public function deleteByTimestamp($value);

	public function deleteByCourseKey($value);

	public function deleteBySnapshot($value);


}
?>