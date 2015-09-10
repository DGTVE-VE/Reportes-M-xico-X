<?php
/**
 * Class that operate on table 'notifications_articlesubscription'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class NotificationsArticlesubscriptionMySqlDAO implements NotificationsArticlesubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return NotificationsArticlesubscriptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM notifications_articlesubscription WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM notifications_articlesubscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM notifications_articlesubscription ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param notificationsArticlesubscription primary key
 	 */
	public function delete($articleplugin_ptr_id){
		$sql = 'DELETE FROM notifications_articlesubscription WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($articleplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotificationsArticlesubscriptionMySql notificationsArticlesubscription
 	 */
	public function insert($notificationsArticlesubscription){
		$sql = 'INSERT INTO notifications_articlesubscription (subscription_ptr_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notificationsArticlesubscription->subscriptionPtrId);

		$id = $this->executeInsert($sqlQuery);	
		$notificationsArticlesubscription->articlepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotificationsArticlesubscriptionMySql notificationsArticlesubscription
 	 */
	public function update($notificationsArticlesubscription){
		$sql = 'UPDATE notifications_articlesubscription SET subscription_ptr_id = ? WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notificationsArticlesubscription->subscriptionPtrId);

		$sqlQuery->setNumber($notificationsArticlesubscription->articlepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM notifications_articlesubscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubscriptionPtrId($value){
		$sql = 'SELECT * FROM notifications_articlesubscription WHERE subscription_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubscriptionPtrId($value){
		$sql = 'DELETE FROM notifications_articlesubscription WHERE subscription_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return NotificationsArticlesubscriptionMySql 
	 */
	protected function readRow($row){
		$notificationsArticlesubscription = new NotificationsArticlesubscription();
		
		$notificationsArticlesubscription->subscriptionPtrId = $row['subscription_ptr_id'];
		$notificationsArticlesubscription->articlepluginPtrId = $row['articleplugin_ptr_id'];

		return $notificationsArticlesubscription;
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
	 * @return NotificationsArticlesubscriptionMySql 
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