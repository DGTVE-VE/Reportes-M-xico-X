<?php
/**
 * Class that operate on table 'notify_notificationtype'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class NotifyNotificationtypeMySqlDAO implements NotifyNotificationtypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return NotifyNotificationtypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM notify_notificationtype WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM notify_notificationtype';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM notify_notificationtype ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param notifyNotificationtype primary key
 	 */
	public function delete($key){
		$sql = 'DELETE FROM notify_notificationtype WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($key);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotifyNotificationtypeMySql notifyNotificationtype
 	 */
	public function insert($notifyNotificationtype){
		$sql = 'INSERT INTO notify_notificationtype (label, content_type_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($notifyNotificationtype->label);
		$sqlQuery->setNumber($notifyNotificationtype->contentTypeId);

		$id = $this->executeInsert($sqlQuery);	
		$notifyNotificationtype->key = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotifyNotificationtypeMySql notifyNotificationtype
 	 */
	public function update($notifyNotificationtype){
		$sql = 'UPDATE notify_notificationtype SET label = ?, content_type_id = ? WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($notifyNotificationtype->label);
		$sqlQuery->setNumber($notifyNotificationtype->contentTypeId);

		$sqlQuery->set($notifyNotificationtype->key);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM notify_notificationtype';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByLabel($value){
		$sql = 'SELECT * FROM notify_notificationtype WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContentTypeId($value){
		$sql = 'SELECT * FROM notify_notificationtype WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByLabel($value){
		$sql = 'DELETE FROM notify_notificationtype WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContentTypeId($value){
		$sql = 'DELETE FROM notify_notificationtype WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return NotifyNotificationtypeMySql 
	 */
	protected function readRow($row){
		$notifyNotificationtype = new NotifyNotificationtype();
		
		$notifyNotificationtype->key = $row['key'];
		$notifyNotificationtype->label = $row['label'];
		$notifyNotificationtype->contentTypeId = $row['content_type_id'];

		return $notifyNotificationtype;
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
	 * @return NotifyNotificationtypeMySql 
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