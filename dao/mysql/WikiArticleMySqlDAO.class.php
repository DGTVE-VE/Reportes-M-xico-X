<?php
/**
 * Class that operate on table 'wiki_article'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiArticleMySqlDAO implements WikiArticleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiArticleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_article WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_article';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_article ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiArticle primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_article WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticleMySql wikiArticle
 	 */
	public function insert($wikiArticle){
		$sql = 'INSERT INTO wiki_article (current_revision_id, created, modified, owner_id, group_id, group_read, group_write, other_read, other_write) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticle->currentRevisionId);
		$sqlQuery->set($wikiArticle->created);
		$sqlQuery->set($wikiArticle->modified);
		$sqlQuery->setNumber($wikiArticle->ownerId);
		$sqlQuery->setNumber($wikiArticle->groupId);
		$sqlQuery->setNumber($wikiArticle->groupRead);
		$sqlQuery->setNumber($wikiArticle->groupWrite);
		$sqlQuery->setNumber($wikiArticle->otherRead);
		$sqlQuery->setNumber($wikiArticle->otherWrite);

		$id = $this->executeInsert($sqlQuery);	
		$wikiArticle->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticleMySql wikiArticle
 	 */
	public function update($wikiArticle){
		$sql = 'UPDATE wiki_article SET current_revision_id = ?, created = ?, modified = ?, owner_id = ?, group_id = ?, group_read = ?, group_write = ?, other_read = ?, other_write = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticle->currentRevisionId);
		$sqlQuery->set($wikiArticle->created);
		$sqlQuery->set($wikiArticle->modified);
		$sqlQuery->setNumber($wikiArticle->ownerId);
		$sqlQuery->setNumber($wikiArticle->groupId);
		$sqlQuery->setNumber($wikiArticle->groupRead);
		$sqlQuery->setNumber($wikiArticle->groupWrite);
		$sqlQuery->setNumber($wikiArticle->otherRead);
		$sqlQuery->setNumber($wikiArticle->otherWrite);

		$sqlQuery->setNumber($wikiArticle->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_article';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCurrentRevisionId($value){
		$sql = 'SELECT * FROM wiki_article WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM wiki_article WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM wiki_article WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOwnerId($value){
		$sql = 'SELECT * FROM wiki_article WHERE owner_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGroupId($value){
		$sql = 'SELECT * FROM wiki_article WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGroupRead($value){
		$sql = 'SELECT * FROM wiki_article WHERE group_read = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGroupWrite($value){
		$sql = 'SELECT * FROM wiki_article WHERE group_write = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOtherRead($value){
		$sql = 'SELECT * FROM wiki_article WHERE other_read = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOtherWrite($value){
		$sql = 'SELECT * FROM wiki_article WHERE other_write = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCurrentRevisionId($value){
		$sql = 'DELETE FROM wiki_article WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM wiki_article WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM wiki_article WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOwnerId($value){
		$sql = 'DELETE FROM wiki_article WHERE owner_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGroupId($value){
		$sql = 'DELETE FROM wiki_article WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGroupRead($value){
		$sql = 'DELETE FROM wiki_article WHERE group_read = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGroupWrite($value){
		$sql = 'DELETE FROM wiki_article WHERE group_write = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOtherRead($value){
		$sql = 'DELETE FROM wiki_article WHERE other_read = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOtherWrite($value){
		$sql = 'DELETE FROM wiki_article WHERE other_write = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiArticleMySql 
	 */
	protected function readRow($row){
		$wikiArticle = new WikiArticle();
		
		$wikiArticle->id = $row['id'];
		$wikiArticle->currentRevisionId = $row['current_revision_id'];
		$wikiArticle->created = $row['created'];
		$wikiArticle->modified = $row['modified'];
		$wikiArticle->ownerId = $row['owner_id'];
		$wikiArticle->groupId = $row['group_id'];
		$wikiArticle->groupRead = $row['group_read'];
		$wikiArticle->groupWrite = $row['group_write'];
		$wikiArticle->otherRead = $row['other_read'];
		$wikiArticle->otherWrite = $row['other_write'];

		return $wikiArticle;
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
	 * @return WikiArticleMySql 
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