<?php
/**
 * Class that operate on table 'djcelery_periodictasks'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryPeriodictasksMySqlDAO implements DjceleryPeriodictasksDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryPeriodictasksMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_periodictasks WHERE ident = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_periodictasks';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_periodictasks ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryPeriodictask primary key
 	 */
	public function delete($ident){
		$sql = 'DELETE FROM djcelery_periodictasks WHERE ident = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($ident);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryPeriodictasksMySql djceleryPeriodictask
 	 */
	public function insert($djceleryPeriodictask){
		$sql = 'INSERT INTO djcelery_periodictasks (last_update) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryPeriodictask->lastUpdate);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryPeriodictask->ident = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryPeriodictasksMySql djceleryPeriodictask
 	 */
	public function update($djceleryPeriodictask){
		$sql = 'UPDATE djcelery_periodictasks SET last_update = ? WHERE ident = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djceleryPeriodictask->lastUpdate);

		$sqlQuery->set($djceleryPeriodictask->ident);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_periodictasks';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByLastUpdate($value){
		$sql = 'SELECT * FROM djcelery_periodictasks WHERE last_update = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByLastUpdate($value){
		$sql = 'DELETE FROM djcelery_periodictasks WHERE last_update = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryPeriodictasksMySql 
	 */
	protected function readRow($row){
		$djceleryPeriodictask = new DjceleryPeriodictask();
		
		$djceleryPeriodictask->ident = $row['ident'];
		$djceleryPeriodictask->lastUpdate = $row['last_update'];

		return $djceleryPeriodictask;
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
	 * @return DjceleryPeriodictasksMySql 
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