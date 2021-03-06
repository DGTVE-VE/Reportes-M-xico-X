<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface NotifySubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return NotifySubscription 
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
 	 * @param notifySubscription primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifySubscription notifySubscription
 	 */
	public function insert($notifySubscription);
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifySubscription notifySubscription
 	 */
	public function update($notifySubscription);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySettingsId($value);

	public function queryByNotificationTypeId($value);

	public function queryByObjectId($value);

	public function queryBySendEmails($value);


	public function deleteBySettingsId($value);

	public function deleteByNotificationTypeId($value);

	public function deleteByObjectId($value);

	public function deleteBySendEmails($value);


}
?>