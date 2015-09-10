<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjceleryCrontabscheduleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjceleryCrontabschedule 
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
 	 * @param djceleryCrontabschedule primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryCrontabschedule djceleryCrontabschedule
 	 */
	public function insert($djceleryCrontabschedule);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryCrontabschedule djceleryCrontabschedule
 	 */
	public function update($djceleryCrontabschedule);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMinute($value);

	public function queryByHour($value);

	public function queryByDayOfWeek($value);

	public function queryByDayOfMonth($value);

	public function queryByMonthOfYear($value);


	public function deleteByMinute($value);

	public function deleteByHour($value);

	public function deleteByDayOfWeek($value);

	public function deleteByDayOfMonth($value);

	public function deleteByMonthOfYear($value);


}
?>