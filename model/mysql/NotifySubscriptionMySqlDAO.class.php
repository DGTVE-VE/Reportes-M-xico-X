<?php
/**
 * Class that operate on table 'notify_subscription'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class NotifySubscriptionMySqlDAO implements NotifySubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return NotifySubscriptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM notify_subscription WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM notify_subscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM notify_subscription ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param notifySubscription primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM notify_subscription WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifySubscriptionMySql notifySubscription
 	 */
	public function insert($notifySubscription){
		$sql = 'INSERT INTO notify_subscription (settings_id, notification_type_id, object_id, send_emails) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notifySubscription->settingsId);
		$sqlQuery->set($notifySubscription->notificationTypeId);
		$sqlQuery->set($notifySubscription->objectId);
		$sqlQuery->setNumber($notifySubscription->sendEmails);

		$id = $this->executeInsert($sqlQuery);	
		$notifySubscription->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifySubscriptionMySql notifySubscription
 	 */
	public function update($notifySubscription){
		$sql = 'UPDATE notify_subscription SET settings_id = ?, notification_type_id = ?, object_id = ?, send_emails = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notifySubscription->settingsId);
		$sqlQuery->set($notifySubscription->notificationTypeId);
		$sqlQuery->set($notifySubscription->objectId);
		$sqlQuery->setNumber($notifySubscription->sendEmails);

		$sqlQuery->setNumber($notifySubscription->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM notify_subscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySettingsId($value){
		$sql = 'SELECT * FROM notify_subscription WHERE settings_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNotificationTypeId($value){
		$sql = 'SELECT * FROM notify_subscription WHERE notification_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByObjectId($value){
		$sql = 'SELECT * FROM notify_subscription WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySendEmails($value){
		$sql = 'SELECT * FROM notify_subscription WHERE send_emails = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySettingsId($value){
		$sql = 'DELETE FROM notify_subscription WHERE settings_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNotificationTypeId($value){
		$sql = 'DELETE FROM notify_subscription WHERE notification_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByObjectId($value){
		$sql = 'DELETE FROM notify_subscription WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySendEmails($value){
		$sql = 'DELETE FROM notify_subscription WHERE send_emails = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return NotifySubscriptionMySql 
	 */
	protected function readRow($row){
		$notifySubscription = new NotifySubscription();
		
		$notifySubscription->id = $row['id'];
		$notifySubscription->settingsId = $row['settings_id'];
		$notifySubscription->notificationTypeId = $row['notification_type_id'];
		$notifySubscription->objectId = $row['object_id'];
		$notifySubscription->sendEmails = $row['send_emails'];

		return $notifySubscription;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return NotifySubscriptionMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>