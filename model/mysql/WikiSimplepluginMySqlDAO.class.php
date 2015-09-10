<?php
/**
 * Class that operate on table 'wiki_simpleplugin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiSimplepluginMySqlDAO implements WikiSimplepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiSimplepluginMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_simpleplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_simpleplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_simpleplugin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiSimpleplugin primary key
 	 */
	public function delete($articleplugin_ptr_id){
		$sql = 'DELETE FROM wiki_simpleplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($articleplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiSimplepluginMySql wikiSimpleplugin
 	 */
	public function insert($wikiSimpleplugin){
		$sql = 'INSERT INTO wiki_simpleplugin (article_revision_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiSimpleplugin->articleRevisionId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiSimpleplugin->articlepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiSimplepluginMySql wikiSimpleplugin
 	 */
	public function update($wikiSimpleplugin){
		$sql = 'UPDATE wiki_simpleplugin SET article_revision_id = ? WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiSimpleplugin->articleRevisionId);

		$sqlQuery->setNumber($wikiSimpleplugin->articlepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_simpleplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByArticleRevisionId($value){
		$sql = 'SELECT * FROM wiki_simpleplugin WHERE article_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByArticleRevisionId($value){
		$sql = 'DELETE FROM wiki_simpleplugin WHERE article_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiSimplepluginMySql 
	 */
	protected function readRow($row){
		$wikiSimpleplugin = new WikiSimpleplugin();
		
		$wikiSimpleplugin->articlepluginPtrId = $row['articleplugin_ptr_id'];
		$wikiSimpleplugin->articleRevisionId = $row['article_revision_id'];

		return $wikiSimpleplugin;
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
	 * @return WikiSimplepluginMySql 
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