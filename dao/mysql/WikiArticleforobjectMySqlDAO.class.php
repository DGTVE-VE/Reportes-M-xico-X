<?php
/**
 * Class that operate on table 'wiki_articleforobject'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiArticleforobjectMySqlDAO implements WikiArticleforobjectDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiArticleforobjectMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_articleforobject WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_articleforobject';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_articleforobject ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiArticleforobject primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_articleforobject WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticleforobjectMySql wikiArticleforobject
 	 */
	public function insert($wikiArticleforobject){
		$sql = 'INSERT INTO wiki_articleforobject (article_id, content_type_id, object_id, is_mptt) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticleforobject->articleId);
		$sqlQuery->setNumber($wikiArticleforobject->contentTypeId);
		$sqlQuery->setNumber($wikiArticleforobject->objectId);
		$sqlQuery->setNumber($wikiArticleforobject->isMptt);

		$id = $this->executeInsert($sqlQuery);	
		$wikiArticleforobject->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticleforobjectMySql wikiArticleforobject
 	 */
	public function update($wikiArticleforobject){
		$sql = 'UPDATE wiki_articleforobject SET article_id = ?, content_type_id = ?, object_id = ?, is_mptt = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticleforobject->articleId);
		$sqlQuery->setNumber($wikiArticleforobject->contentTypeId);
		$sqlQuery->setNumber($wikiArticleforobject->objectId);
		$sqlQuery->setNumber($wikiArticleforobject->isMptt);

		$sqlQuery->setNumber($wikiArticleforobject->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_articleforobject';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByArticleId($value){
		$sql = 'SELECT * FROM wiki_articleforobject WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContentTypeId($value){
		$sql = 'SELECT * FROM wiki_articleforobject WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByObjectId($value){
		$sql = 'SELECT * FROM wiki_articleforobject WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsMptt($value){
		$sql = 'SELECT * FROM wiki_articleforobject WHERE is_mptt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByArticleId($value){
		$sql = 'DELETE FROM wiki_articleforobject WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContentTypeId($value){
		$sql = 'DELETE FROM wiki_articleforobject WHERE content_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByObjectId($value){
		$sql = 'DELETE FROM wiki_articleforobject WHERE object_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsMptt($value){
		$sql = 'DELETE FROM wiki_articleforobject WHERE is_mptt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiArticleforobjectMySql 
	 */
	protected function readRow($row){
		$wikiArticleforobject = new WikiArticleforobject();
		
		$wikiArticleforobject->id = $row['id'];
		$wikiArticleforobject->articleId = $row['article_id'];
		$wikiArticleforobject->contentTypeId = $row['content_type_id'];
		$wikiArticleforobject->objectId = $row['object_id'];
		$wikiArticleforobject->isMptt = $row['is_mptt'];

		return $wikiArticleforobject;
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
	 * @return WikiArticleforobjectMySql 
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