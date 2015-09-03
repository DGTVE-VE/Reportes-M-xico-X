<?php
/**
 * Class that operate on table 'wiki_revisionpluginrevision'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiRevisionpluginrevisionMySqlDAO implements WikiRevisionpluginrevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiRevisionpluginrevisionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiRevisionpluginrevision primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiRevisionpluginrevisionMySql wikiRevisionpluginrevision
 	 */
	public function insert($wikiRevisionpluginrevision){
		$sql = 'INSERT INTO wiki_revisionpluginrevision (revision_number, user_message, automatic_log, ip_address, user_id, modified, created, previous_revision_id, deleted, locked, plugin_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiRevisionpluginrevision->revisionNumber);
		$sqlQuery->set($wikiRevisionpluginrevision->userMessage);
		$sqlQuery->set($wikiRevisionpluginrevision->automaticLog);
		$sqlQuery->set($wikiRevisionpluginrevision->ipAddress);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->userId);
		$sqlQuery->set($wikiRevisionpluginrevision->modified);
		$sqlQuery->set($wikiRevisionpluginrevision->created);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->previousRevisionId);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->deleted);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->locked);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->pluginId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiRevisionpluginrevision->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiRevisionpluginrevisionMySql wikiRevisionpluginrevision
 	 */
	public function update($wikiRevisionpluginrevision){
		$sql = 'UPDATE wiki_revisionpluginrevision SET revision_number = ?, user_message = ?, automatic_log = ?, ip_address = ?, user_id = ?, modified = ?, created = ?, previous_revision_id = ?, deleted = ?, locked = ?, plugin_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiRevisionpluginrevision->revisionNumber);
		$sqlQuery->set($wikiRevisionpluginrevision->userMessage);
		$sqlQuery->set($wikiRevisionpluginrevision->automaticLog);
		$sqlQuery->set($wikiRevisionpluginrevision->ipAddress);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->userId);
		$sqlQuery->set($wikiRevisionpluginrevision->modified);
		$sqlQuery->set($wikiRevisionpluginrevision->created);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->previousRevisionId);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->deleted);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->locked);
		$sqlQuery->setNumber($wikiRevisionpluginrevision->pluginId);

		$sqlQuery->setNumber($wikiRevisionpluginrevision->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_revisionpluginrevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRevisionNumber($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserMessage($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutomaticLog($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIpAddress($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPreviousRevisionId($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDeleted($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocked($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPluginId($value){
		$sql = 'SELECT * FROM wiki_revisionpluginrevision WHERE plugin_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRevisionNumber($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserMessage($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutomaticLog($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIpAddress($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPreviousRevisionId($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDeleted($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocked($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPluginId($value){
		$sql = 'DELETE FROM wiki_revisionpluginrevision WHERE plugin_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiRevisionpluginrevisionMySql 
	 */
	protected function readRow($row){
		$wikiRevisionpluginrevision = new WikiRevisionpluginrevision();
		
		$wikiRevisionpluginrevision->id = $row['id'];
		$wikiRevisionpluginrevision->revisionNumber = $row['revision_number'];
		$wikiRevisionpluginrevision->userMessage = $row['user_message'];
		$wikiRevisionpluginrevision->automaticLog = $row['automatic_log'];
		$wikiRevisionpluginrevision->ipAddress = $row['ip_address'];
		$wikiRevisionpluginrevision->userId = $row['user_id'];
		$wikiRevisionpluginrevision->modified = $row['modified'];
		$wikiRevisionpluginrevision->created = $row['created'];
		$wikiRevisionpluginrevision->previousRevisionId = $row['previous_revision_id'];
		$wikiRevisionpluginrevision->deleted = $row['deleted'];
		$wikiRevisionpluginrevision->locked = $row['locked'];
		$wikiRevisionpluginrevision->pluginId = $row['plugin_id'];

		return $wikiRevisionpluginrevision;
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
	 * @return WikiRevisionpluginrevisionMySql 
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