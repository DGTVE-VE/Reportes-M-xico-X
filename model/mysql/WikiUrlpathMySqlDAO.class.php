<?php
/**
 * Class that operate on table 'wiki_urlpath'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiUrlpathMySqlDAO implements WikiUrlpathDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiUrlpathMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_urlpath WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_urlpath';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_urlpath ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiUrlpath primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_urlpath WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiUrlpathMySql wikiUrlpath
 	 */
	public function insert($wikiUrlpath){
		$sql = 'INSERT INTO wiki_urlpath (slug, site_id, parent_id, lft, rght, tree_id, level, article_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wikiUrlpath->slug);
		$sqlQuery->setNumber($wikiUrlpath->siteId);
		$sqlQuery->setNumber($wikiUrlpath->parentId);
		$sqlQuery->setNumber($wikiUrlpath->lft);
		$sqlQuery->setNumber($wikiUrlpath->rght);
		$sqlQuery->setNumber($wikiUrlpath->treeId);
		$sqlQuery->setNumber($wikiUrlpath->level);
		$sqlQuery->setNumber($wikiUrlpath->articleId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiUrlpath->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiUrlpathMySql wikiUrlpath
 	 */
	public function update($wikiUrlpath){
		$sql = 'UPDATE wiki_urlpath SET slug = ?, site_id = ?, parent_id = ?, lft = ?, rght = ?, tree_id = ?, level = ?, article_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wikiUrlpath->slug);
		$sqlQuery->setNumber($wikiUrlpath->siteId);
		$sqlQuery->setNumber($wikiUrlpath->parentId);
		$sqlQuery->setNumber($wikiUrlpath->lft);
		$sqlQuery->setNumber($wikiUrlpath->rght);
		$sqlQuery->setNumber($wikiUrlpath->treeId);
		$sqlQuery->setNumber($wikiUrlpath->level);
		$sqlQuery->setNumber($wikiUrlpath->articleId);

		$sqlQuery->setNumber($wikiUrlpath->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_urlpath';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySlug($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySiteId($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE site_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByParentId($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE parent_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLft($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE lft = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRght($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE rght = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTreeId($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE tree_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLevel($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE level = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArticleId($value){
		$sql = 'SELECT * FROM wiki_urlpath WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySlug($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySiteId($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE site_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByParentId($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE parent_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLft($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE lft = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRght($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE rght = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTreeId($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE tree_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLevel($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE level = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArticleId($value){
		$sql = 'DELETE FROM wiki_urlpath WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiUrlpathMySql 
	 */
	protected function readRow($row){
		$wikiUrlpath = new WikiUrlpath();
		
		$wikiUrlpath->id = $row['id'];
		$wikiUrlpath->slug = $row['slug'];
		$wikiUrlpath->siteId = $row['site_id'];
		$wikiUrlpath->parentId = $row['parent_id'];
		$wikiUrlpath->lft = $row['lft'];
		$wikiUrlpath->rght = $row['rght'];
		$wikiUrlpath->treeId = $row['tree_id'];
		$wikiUrlpath->level = $row['level'];
		$wikiUrlpath->articleId = $row['article_id'];

		return $wikiUrlpath;
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
	 * @return WikiUrlpathMySql 
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