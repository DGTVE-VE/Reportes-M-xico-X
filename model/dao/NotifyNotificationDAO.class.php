<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface NotifyNotificationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return NotifyNotification 
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
 	 * @param notifyNotification primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifyNotification notifyNotification
 	 */
	public function insert($notifyNotification);
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifyNotification notifyNotification
 	 */
	public function update($notifyNotification);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubscriptionId($value);

	public function queryByMessage($value);

	public function queryByUrl($value);

	public function queryByIsViewed($value);

	public function queryByIsEmailed($value);

	public function queryByCreated($value);


	public function deleteBySubscriptionId($value);

	public function deleteByMessage($value);

	public function deleteByUrl($value);

	public function deleteByIsViewed($value);

	public function deleteByIsEmailed($value);

	public function deleteByCreated($value);


}
?>