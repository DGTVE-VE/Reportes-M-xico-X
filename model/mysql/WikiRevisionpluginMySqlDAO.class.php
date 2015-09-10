<?php
/**
 * Class that operate on table 'wiki_revisionplugin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiRevisionpluginMySqlDAO implements WikiRevisionpluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiRevisionpluginMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_revisionplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_revisionplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_revisionplugin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiRevisionplugin primary key
 	 */
	public function delete($articleplugin_ptr_id){
		$sql = 'DELETE FROM wiki_revisionplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($articleplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiRevisionpluginMySql wikiRevisionplugin
 	 */
	public function insert($wikiRevisionplugin){
		$sql = 'INSERT INTO wiki_revisionplugin (current_revision_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiRevisionplugin->currentRevisionId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiRevisionplugin->articlepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiRevisionpluginMySql wikiRevisionplugin
 	 */
	public function update($wikiRevisionplugin){
		$sql = 'UPDATE wiki_revisionplugin SET current_revision_id = ? WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiRevisionplugin->currentRevisionId);

		$sqlQuery->setNumber($wikiRevisionplugin->articlepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_revisionplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCurrentRevisionId($value){
		$sql = 'SELECT * FROM wiki_revisionplugin WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCurrentRevisionId($value){
		$sql = 'DELETE FROM wiki_revisionplugin WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiRevisionpluginMySql 
	 */
	protected function readRow($row){
		$wikiRevisionplugin = new WikiRevisionplugin();
		
		$wikiRevisionplugin->articlepluginPtrId = $row['articleplugin_ptr_id'];
		$wikiRevisionplugin->currentRevisionId = $row['current_revision_id'];

		return $wikiRevisionplugin;
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
	 * @return WikiRevisionpluginMySql 
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