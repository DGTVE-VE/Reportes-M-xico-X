<?php
/**
 * Class that operate on table 'util_ratelimitconfiguration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class UtilRatelimitconfigurationMySqlDAO implements UtilRatelimitconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UtilRatelimitconfigurationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM util_ratelimitconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM util_ratelimitconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM util_ratelimitconfiguration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param utilRatelimitconfiguration primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM util_ratelimitconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UtilRatelimitconfigurationMySql utilRatelimitconfiguration
 	 */
	public function insert($utilRatelimitconfiguration){
		$sql = 'INSERT INTO util_ratelimitconfiguration (change_date, changed_by_id, enabled) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($utilRatelimitconfiguration->changeDate);
		$sqlQuery->setNumber($utilRatelimitconfiguration->changedById);
		$sqlQuery->setNumber($utilRatelimitconfiguration->enabled);

		$id = $this->executeInsert($sqlQuery);	
		$utilRatelimitconfiguration->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UtilRatelimitconfigurationMySql utilRatelimitconfiguration
 	 */
	public function update($utilRatelimitconfiguration){
		$sql = 'UPDATE util_ratelimitconfiguration SET change_date = ?, changed_by_id = ?, enabled = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($utilRatelimitconfiguration->changeDate);
		$sqlQuery->setNumber($utilRatelimitconfiguration->changedById);
		$sqlQuery->setNumber($utilRatelimitconfiguration->enabled);

		$sqlQuery->setNumber($utilRatelimitconfiguration->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM util_ratelimitconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM util_ratelimitconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM util_ratelimitconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM util_ratelimitconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM util_ratelimitconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM util_ratelimitconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM util_ratelimitconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UtilRatelimitconfigurationMySql 
	 */
	protected function readRow($row){
		$utilRatelimitconfiguration = new UtilRatelimitconfiguration();
		
		$utilRatelimitconfiguration->id = $row['id'];
		$utilRatelimitconfiguration->changeDate = $row['change_date'];
		$utilRatelimitconfiguration->changedById = $row['changed_by_id'];
		$utilRatelimitconfiguration->enabled = $row['enabled'];

		return $utilRatelimitconfiguration;
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
	 * @return UtilRatelimitconfigurationMySql 
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