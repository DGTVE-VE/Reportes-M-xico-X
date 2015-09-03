<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface NotificationsArticlesubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return NotificationsArticlesubscription 
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
 	 * @param notificationsArticlesubscription primary key
 	 */
	public function delete($articleplugin_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotificationsArticlesubscription notificationsArticlesubscription
 	 */
	public function insert($notificationsArticlesubscription);
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotificationsArticlesubscription notificationsArticlesubscription
 	 */
	public function update($notificationsArticlesubscription);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubscriptionPtrId($value);


	public function deleteBySubscriptionPtrId($value);


}
?>