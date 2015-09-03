<?php
/**
 * Class that operate on table 'wiki_reusableplugin_articles'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiReusablepluginArticlesMySqlDAO implements WikiReusablepluginArticlesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiReusablepluginArticlesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_reusableplugin_articles WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_reusableplugin_articles';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_reusableplugin_articles ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiReusablepluginArticle primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_reusableplugin_articles WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiReusablepluginArticlesMySql wikiReusablepluginArticle
 	 */
	public function insert($wikiReusablepluginArticle){
		$sql = 'INSERT INTO wiki_reusableplugin_articles (reusableplugin_id, article_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiReusablepluginArticle->reusablepluginId);
		$sqlQuery->setNumber($wikiReusablepluginArticle->articleId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiReusablepluginArticle->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiReusablepluginArticlesMySql wikiReusablepluginArticle
 	 */
	public function update($wikiReusablepluginArticle){
		$sql = 'UPDATE wiki_reusableplugin_articles SET reusableplugin_id = ?, article_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiReusablepluginArticle->reusablepluginId);
		$sqlQuery->setNumber($wikiReusablepluginArticle->articleId);

		$sqlQuery->setNumber($wikiReusablepluginArticle->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_reusableplugin_articles';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByReusablepluginId($value){
		$sql = 'SELECT * FROM wiki_reusableplugin_articles WHERE reusableplugin_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArticleId($value){
		$sql = 'SELECT * FROM wiki_reusableplugin_articles WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByReusablepluginId($value){
		$sql = 'DELETE FROM wiki_reusableplugin_articles WHERE reusableplugin_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArticleId($value){
		$sql = 'DELETE FROM wiki_reusableplugin_articles WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiReusablepluginArticlesMySql 
	 */
	protected function readRow($row){
		$wikiReusablepluginArticle = new WikiReusablepluginArticle();
		
		$wikiReusablepluginArticle->id = $row['id'];
		$wikiReusablepluginArticle->reusablepluginId = $row['reusableplugin_id'];
		$wikiReusablepluginArticle->articleId = $row['article_id'];

		return $wikiReusablepluginArticle;
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
	 * @return WikiReusablepluginArticlesMySql 
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