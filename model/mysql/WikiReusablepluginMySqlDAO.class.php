<?php
/**
 * Class that operate on table 'wiki_reusableplugin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiReusablepluginMySqlDAO implements WikiReusablepluginDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiReusablepluginMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_reusableplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_reusableplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_reusableplugin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiReusableplugin primary key
 	 */
	public function delete($articleplugin_ptr_id){
		$sql = 'DELETE FROM wiki_reusableplugin WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($articleplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiReusablepluginMySql wikiReusableplugin
 	 */
	public function insert($wikiReusableplugin){
		$sql = 'INSERT INTO wiki_reusableplugin () VALUES ()';
		$sqlQuery = new SqlQuery($sql);
		

		$id = $this->executeInsert($sqlQuery);	
		$wikiReusableplugin->articlepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiReusablepluginMySql wikiReusableplugin
 	 */
	public function update($wikiReusableplugin){
		$sql = 'UPDATE wiki_reusableplugin SET  WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		

		$sqlQuery->setNumber($wikiReusableplugin->articlepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_reusableplugin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return WikiReusablepluginMySql 
	 */
	protected function readRow($row){
		$wikiReusableplugin = new WikiReusableplugin();
		
		$wikiReusableplugin->articlepluginPtrId = $row['articleplugin_ptr_id'];

		return $wikiReusableplugin;
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
	 * @return WikiReusablepluginMySql 
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