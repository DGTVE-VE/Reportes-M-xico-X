<?php
/**
 * Class that operate on table 'wiki_articlerevision'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiArticlerevisionMySqlDAO implements WikiArticlerevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiArticlerevisionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_articlerevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_articlerevision ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiArticlerevision primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_articlerevision WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticlerevisionMySql wikiArticlerevision
 	 */
	public function insert($wikiArticlerevision){
		$sql = 'INSERT INTO wiki_articlerevision (revision_number, user_message, automatic_log, ip_address, user_id, modified, created, previous_revision_id, deleted, locked, article_id, content, title) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticlerevision->revisionNumber);
		$sqlQuery->set($wikiArticlerevision->userMessage);
		$sqlQuery->set($wikiArticlerevision->automaticLog);
		$sqlQuery->set($wikiArticlerevision->ipAddress);
		$sqlQuery->setNumber($wikiArticlerevision->userId);
		$sqlQuery->set($wikiArticlerevision->modified);
		$sqlQuery->set($wikiArticlerevision->created);
		$sqlQuery->setNumber($wikiArticlerevision->previousRevisionId);
		$sqlQuery->setNumber($wikiArticlerevision->deleted);
		$sqlQuery->setNumber($wikiArticlerevision->locked);
		$sqlQuery->setNumber($wikiArticlerevision->articleId);
		$sqlQuery->set($wikiArticlerevision->content);
		$sqlQuery->set($wikiArticlerevision->title);

		$id = $this->executeInsert($sqlQuery);	
		$wikiArticlerevision->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticlerevisionMySql wikiArticlerevision
 	 */
	public function update($wikiArticlerevision){
		$sql = 'UPDATE wiki_articlerevision SET revision_number = ?, user_message = ?, automatic_log = ?, ip_address = ?, user_id = ?, modified = ?, created = ?, previous_revision_id = ?, deleted = ?, locked = ?, article_id = ?, content = ?, title = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticlerevision->revisionNumber);
		$sqlQuery->set($wikiArticlerevision->userMessage);
		$sqlQuery->set($wikiArticlerevision->automaticLog);
		$sqlQuery->set($wikiArticlerevision->ipAddress);
		$sqlQuery->setNumber($wikiArticlerevision->userId);
		$sqlQuery->set($wikiArticlerevision->modified);
		$sqlQuery->set($wikiArticlerevision->created);
		$sqlQuery->setNumber($wikiArticlerevision->previousRevisionId);
		$sqlQuery->setNumber($wikiArticlerevision->deleted);
		$sqlQuery->setNumber($wikiArticlerevision->locked);
		$sqlQuery->setNumber($wikiArticlerevision->articleId);
		$sqlQuery->set($wikiArticlerevision->content);
		$sqlQuery->set($wikiArticlerevision->title);

		$sqlQuery->setNumber($wikiArticlerevision->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_articlerevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRevisionNumber($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserMessage($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutomaticLog($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIpAddress($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPreviousRevisionId($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDeleted($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocked($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArticleId($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContent($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitle($value){
		$sql = 'SELECT * FROM wiki_articlerevision WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRevisionNumber($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE revision_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserMessage($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE user_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutomaticLog($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE automatic_log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIpAddress($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE ip_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPreviousRevisionId($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE previous_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDeleted($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocked($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE locked = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArticleId($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContent($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitle($value){
		$sql = 'DELETE FROM wiki_articlerevision WHERE title = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiArticlerevisionMySql 
	 */
	protected function readRow($row){
		$wikiArticlerevision = new WikiArticlerevision();
		
		$wikiArticlerevision->id = $row['id'];
		$wikiArticlerevision->revisionNumber = $row['revision_number'];
		$wikiArticlerevision->userMessage = $row['user_message'];
		$wikiArticlerevision->automaticLog = $row['automatic_log'];
		$wikiArticlerevision->ipAddress = $row['ip_address'];
		$wikiArticlerevision->userId = $row['user_id'];
		$wikiArticlerevision->modified = $row['modified'];
		$wikiArticlerevision->created = $row['created'];
		$wikiArticlerevision->previousRevisionId = $row['previous_revision_id'];
		$wikiArticlerevision->deleted = $row['deleted'];
		$wikiArticlerevision->locked = $row['locked'];
		$wikiArticlerevision->articleId = $row['article_id'];
		$wikiArticlerevision->content = $row['content'];
		$wikiArticlerevision->title = $row['title'];

		return $wikiArticlerevision;
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
	 * @return WikiArticlerevisionMySql 
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