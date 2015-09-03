<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface NotifyNotificationtypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return NotifyNotificationtype 
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
 	 * @param notifyNotificationtype primary key
 	 */
	public function delete($key);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifyNotificationtype notifyNotificationtype
 	 */
	public function insert($notifyNotificationtype);
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifyNotificationtype notifyNotificationtype
 	 */
	public function update($notifyNotificationtype);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLabel($value);

	public function queryByContentTypeId($value);


	public function deleteByLabel($value);

	public function deleteByContentTypeId($value);


}
?>