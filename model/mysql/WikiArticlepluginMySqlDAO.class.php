<?php
/**
 * Class that operate on table 'wiki_articleplugin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiArticlepluginMySqlDAO implements WikiArticlepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiArticlepluginMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_articleplugin WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_articleplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_articleplugin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiArticleplugin primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM wiki_articleplugin WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticlepluginMySql wikiArticleplugin
 	 */
	public function insert($wikiArticleplugin){
		$sql = 'INSERT INTO wiki_articleplugin (article_id, deleted, created) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticleplugin->articleId);
		$sqlQuery->setNumber($wikiArticleplugin->deleted);
		$sqlQuery->set($wikiArticleplugin->created);

		$id = $this->executeInsert($sqlQuery);	
		$wikiArticleplugin->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticlepluginMySql wikiArticleplugin
 	 */
	public function update($wikiArticleplugin){
		$sql = 'UPDATE wiki_articleplugin SET article_id = ?, deleted = ?, created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticleplugin->articleId);
		$sqlQuery->setNumber($wikiArticleplugin->deleted);
		$sqlQuery->set($wikiArticleplugin->created);

		$sqlQuery->setNumber($wikiArticleplugin->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_articleplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByArticleId($value){
		$sql = 'SELECT * FROM wiki_articleplugin WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDeleted($value){
		$sql = 'SELECT * FROM wiki_articleplugin WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM wiki_articleplugin WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByArticleId($value){
		$sql = 'DELETE FROM wiki_articleplugin WHERE article_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDeleted($value){
		$sql = 'DELETE FROM wiki_articleplugin WHERE deleted = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM wiki_articleplugin WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiArticlepluginMySql 
	 */
	protected function readRow($row){
		$wikiArticleplugin = new WikiArticleplugin();
		
		$wikiArticleplugin->id = $row['id'];
		$wikiArticleplugin->articleId = $row['article_id'];
		$wikiArticleplugin->deleted = $row['deleted'];
		$wikiArticleplugin->created = $row['created'];

		return $wikiArticleplugin;
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
	 * @return WikiArticlepluginMySql 
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