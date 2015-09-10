<?php
/**
 * Class that operate on table 'django_admin_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoAdminLogMySqlDAO implements DjangoAdminLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoAdminLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_admin_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_admin_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_admin_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoAdminLog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_admin_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoAdminLogMySql djangoAdminLog
 	 */
	public function insert($djangoAdminLog){
		$sql = 'INSERT INTO django_admin_log (action_time, user_id, content_type_id, object_id, object_repr, action_flag, change_message) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoAdminLog->actionTime);
		$sqlQuery->setNumber($djangoAdminLog->userId);
		$sqlQuery->setNumber($djangoAdminLog->contentTypeId);
		$sqlQuery->set($djangoAdminLog->objectId);
		$sqlQuery->set($djangoAdminLog->objectRepr);
		$sqlQuery->set($djangoAdminLog->actionFlag);
		$sqlQuery->set($djangoAdminLog->changeMessage);

		$id = $this->executeInsert($sqlQuery);	
		$djangoAdminLog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoAdminLogMySql djangoAdminLog
 	 */
	public function update($djangoAdminLog){
		$sql = 'UPDATE django_admin_log SET action_time = ?, user_id = ?, content_type_id = ?, object_id = ?, object_repr = ?, action_flag = ?, change_message = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoAdminLog->actionTime);
		$sqlQuery->setNumber($djangoAdminLog->userId);
		$sqlQuery->setNumber($djangoAdminLog->contentTypeId);
		$sqlQuery->set($djangoAdminLog->objectId);
		$sqlQuery->set($djangoAdminLog->objectRepr);
		$sqlQuery->set($djangoAdminLog->actionFlag);
		$sqlQuery->set($djangoAdminLog->changeMessage);

		$sqlQuery->setNumber($djangoAdminLog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_admin_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByActionTime($value){
		$sql = 'SELECT * FROM django_admin_log WHERE action_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM django_admin_log WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContentTypeId($value){
		$sql = 'SELECT * FROM django_admin_log WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByObjectId($value){
		$sql = 'SELECT * FROM django_admin_log WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByObjectRepr($value){
		$sql = 'SELECT * FROM django_admin_log WHERE object_repr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActionFlag($value){
		$sql = 'SELECT * FROM django_admin_log WHERE action_flag = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangeMessage($value){
		$sql = 'SELECT * FROM django_admin_log WHERE change_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByActionTime($value){
		$sql = 'DELETE FROM django_admin_log WHERE action_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM django_admin_log WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContentTypeId($value){
		$sql = 'DELETE FROM django_admin_log WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByObjectId($value){
		$sql = 'DELETE FROM django_admin_log WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByObjectRepr($value){
		$sql = 'DELETE FROM django_admin_log WHERE object_repr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActionFlag($value){
		$sql = 'DELETE FROM django_admin_log WHERE action_flag = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangeMessage($value){
		$sql = 'DELETE FROM django_admin_log WHERE change_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoAdminLogMySql 
	 */
	protected function readRow($row){
		$djangoAdminLog = new DjangoAdminLog();
		
		$djangoAdminLog->id = $row['id'];
		$djangoAdminLog->actionTime = $row['action_time'];
		$djangoAdminLog->userId = $row['user_id'];
		$djangoAdminLog->contentTypeId = $row['content_type_id'];
		$djangoAdminLog->objectId = $row['object_id'];
		$djangoAdminLog->objectRepr = $row['object_repr'];
		$djangoAdminLog->actionFlag = $row['action_flag'];
		$djangoAdminLog->changeMessage = $row['change_message'];

		return $djangoAdminLog;
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
	 * @return DjangoAdminLogMySql 
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