<?php
/**
 * Class that operate on table 'wiki_attachmentrevision'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiAttachmentrevisionMySqlDAO implements WikiAttachmentrevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiAttachmentrevisionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_attachmentrevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_attachmentrevision ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiAttachmentrevision primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiAttachmentrevisionMySql wikiAttachmentrevision
 	 */
	public function insert($wikiAttachmentrevision){
		$sql = 'INSERT INTO wiki_attachmentrevision (revision_number, user_message, automatic_log, ip_address, user_id, modified, created, previous_revision_id, deleted, locked, attachment_id, file, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiAttachmentrevision->revisionNumber);
		$sqlQuery->set($wikiAttachmentrevision->userMessage);
		$sqlQuery->set($wikiAttachmentrevision->automaticLog);
		$sqlQuery->set($wikiAttachmentrevision->ipAddress);
		$sqlQuery->setNumber($wikiAttachmentrevision->userId);
		$sqlQuery->set($wikiAttachmentrevision->modified);
		$sqlQuery->set($wikiAttachmentrevision->created);
		$sqlQuery->setNumber($wikiAttachmentrevision->previousRevisionId);
		$sqlQuery->setNumber($wikiAttachmentrevision->deleted);
		$sqlQuery->setNumber($wikiAttachmentrevision->locked);
		$sqlQuery->setNumber($wikiAttachmentrevision->attachmentId);
		$sqlQuery->set($wikiAttachmentrevision->file);
		$sqlQuery->set($wikiAttachmentrevision->description);

		$id = $this->executeInsert($sqlQuery);	
		$wikiAttachmentrevision->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiAttachmentrevisionMySql wikiAttachmentrevision
 	 */
	public function update($wikiAttachmentrevision){
		$sql = 'UPDATE wiki_attachmentrevision SET revision_number = ?, user_message = ?, automatic_log = ?, ip_address = ?, user_id = ?, modified = ?, created = ?, previous_revision_id = ?, deleted = ?, locked = ?, attachment_id = ?, file = ?, description = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiAttachmentrevision->revisionNumber);
		$sqlQuery->set($wikiAttachmentrevision->userMessage);
		$sqlQuery->set($wikiAttachmentrevision->automaticLog);
		$sqlQuery->set($wikiAttachmentrevision->ipAddress);
		$sqlQuery->setNumber($wikiAttachmentrevision->userId);
		$sqlQuery->set($wikiAttachmentrevision->modified);
		$sqlQuery->set($wikiAttachmentrevision->created);
		$sqlQuery->setNumber($wikiAttachmentrevision->previousRevisionId);
		$sqlQuery->setNumber($wikiAttachmentrevision->deleted);
		$sqlQuery->setNumber($wikiAttachmentrevision->locked);
		$sqlQuery->setNumber($wikiAttachmentrevision->attachmentId);
		$sqlQuery->set($wikiAttachmentrevision->file);
		$sqlQuery->set($wikiAttachmentrevision->description);

		$sqlQuery->setNumber($wikiAttachmentrevision->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_attachmentrevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRevisionNumber($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserMessage($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutomaticLog($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIpAddress($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPreviousRevisionId($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDeleted($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocked($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAttachmentId($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE attachment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFile($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE file = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM wiki_attachmentrevision WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRevisionNumber($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserMessage($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutomaticLog($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIpAddress($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPreviousRevisionId($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDeleted($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocked($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAttachmentId($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE attachment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFile($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE file = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM wiki_attachmentrevision WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiAttachmentrevisionMySql 
	 */
	protected function readRow($row){
		$wikiAttachmentrevision = new WikiAttachmentrevision();
		
		$wikiAttachmentrevision->id = $row['id'];
		$wikiAttachmentrevision->revisionNumber = $row['revision_number'];
		$wikiAttachmentrevision->userMessage = $row['user_message'];
		$wikiAttachmentrevision->automaticLog = $row['automatic_log'];
		$wikiAttachmentrevision->ipAddress = $row['ip_address'];
		$wikiAttachmentrevision->userId = $row['user_id'];
		$wikiAttachmentrevision->modified = $row['modified'];
		$wikiAttachmentrevision->created = $row['created'];
		$wikiAttachmentrevision->previousRevisionId = $row['previous_revision_id'];
		$wikiAttachmentrevision->deleted = $row['deleted'];
		$wikiAttachmentrevision->locked = $row['locked'];
		$wikiAttachmentrevision->attachmentId = $row['attachment_id'];
		$wikiAttachmentrevision->file = $row['file'];
		$wikiAttachmentrevision->description = $row['description'];

		return $wikiAttachmentrevision;
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
	 * @return WikiAttachmentrevisionMySql 
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