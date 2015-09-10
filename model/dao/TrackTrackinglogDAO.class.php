<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface TrackTrackinglogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TrackTrackinglog 
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
 	 * @param trackTrackinglog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TrackTrackinglog trackTrackinglog
 	 */
	public function insert($trackTrackinglog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TrackTrackinglog trackTrackinglog
 	 */
	public function update($trackTrackinglog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDtcreated($value);

	public function queryByUsername($value);

	public function queryByIp($value);

	public function queryByEventSource($value);

	public function queryByEventType($value);

	public function queryByEvent($value);

	public function queryByAgent($value);

	public function queryByPage($value);

	public function queryByTime($value);

	public function queryByHost($value);


	public function deleteByDtcreated($value);

	public function deleteByUsername($value);

	public function deleteByIp($value);

	public function deleteByEventSource($value);

	public function deleteByEventType($value);

	public function deleteByEvent($value);

	public function deleteByAgent($value);

	public function deleteByPage($value);

	public function deleteByTime($value);

	public function deleteByHost($value);


}
?>