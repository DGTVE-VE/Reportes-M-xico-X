<?php
/**
 * Class that operate on table 'notify_notification'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class NotifyNotificationMySqlDAO implements NotifyNotificationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return NotifyNotificationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM notify_notification WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM notify_notification';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM notify_notification ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param notifyNotification primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM notify_notification WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifyNotificationMySql notifyNotification
 	 */
	public function insert($notifyNotification){
		$sql = 'INSERT INTO notify_notification (subscription_id, message, url, is_viewed, is_emailed, created) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notifyNotification->subscriptionId);
		$sqlQuery->set($notifyNotification->message);
		$sqlQuery->set($notifyNotification->url);
		$sqlQuery->setNumber($notifyNotification->isViewed);
		$sqlQuery->setNumber($notifyNotification->isEmailed);
		$sqlQuery->set($notifyNotification->created);

		$id = $this->executeInsert($sqlQuery);	
		$notifyNotification->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifyNotificationMySql notifyNotification
 	 */
	public function update($notifyNotification){
		$sql = 'UPDATE notify_notification SET subscription_id = ?, message = ?, url = ?, is_viewed = ?, is_emailed = ?, created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notifyNotification->subscriptionId);
		$sqlQuery->set($notifyNotification->message);
		$sqlQuery->set($notifyNotification->url);
		$sqlQuery->setNumber($notifyNotification->isViewed);
		$sqlQuery->setNumber($notifyNotification->isEmailed);
		$sqlQuery->set($notifyNotification->created);

		$sqlQuery->setNumber($notifyNotification->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM notify_notification';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubscriptionId($value){
		$sql = 'SELECT * FROM notify_notification WHERE subscription_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMessage($value){
		$sql = 'SELECT * FROM notify_notification WHERE message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM notify_notification WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsViewed($value){
		$sql = 'SELECT * FROM notify_notification WHERE is_viewed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsEmailed($value){
		$sql = 'SELECT * FROM notify_notification WHERE is_emailed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM notify_notification WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubscriptionId($value){
		$sql = 'DELETE FROM notify_notification WHERE subscription_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMessage($value){
		$sql = 'DELETE FROM notify_notification WHERE message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM notify_notification WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsViewed($value){
		$sql = 'DELETE FROM notify_notification WHERE is_viewed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsEmailed($value){
		$sql = 'DELETE FROM notify_notification WHERE is_emailed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM notify_notification WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return NotifyNotificationMySql 
	 */
	protected function readRow($row){
		$notifyNotification = new NotifyNotification();
		
		$notifyNotification->id = $row['id'];
		$notifyNotification->subscriptionId = $row['subscription_id'];
		$notifyNotification->message = $row['message'];
		$notifyNotification->url = $row['url'];
		$notifyNotification->isViewed = $row['is_viewed'];
		$notifyNotification->isEmailed = $row['is_emailed'];
		$notifyNotification->created = $row['created'];

		return $notifyNotification;
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
	 * @return NotifyNotificationMySql 
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