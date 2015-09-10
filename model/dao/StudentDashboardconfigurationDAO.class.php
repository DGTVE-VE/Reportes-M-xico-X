<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentDashboardconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentDashboardconfiguration 
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
 	 * @param studentDashboardconfiguration primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentDashboardconfiguration studentDashboardconfiguration
 	 */
	public function insert($studentDashboardconfiguration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentDashboardconfiguration studentDashboardconfiguration
 	 */
	public function update($studentDashboardconfiguration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByRecentEnrollmentTimeDelta($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByRecentEnrollmentTimeDelta($value);


}
?>