<?php
/**
 * Class that operate on table 'embargo_ipfilter'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoIpfilterMySqlDAO implements EmbargoIpfilterDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoIpfilterMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_ipfilter';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_ipfilter ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoIpfilter primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_ipfilter WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoIpfilterMySql embargoIpfilter
 	 */
	public function insert($embargoIpfilter){
		$sql = 'INSERT INTO embargo_ipfilter (change_date, changed_by_id, enabled, whitelist, blacklist) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoIpfilter->changeDate);
		$sqlQuery->setNumber($embargoIpfilter->changedById);
		$sqlQuery->setNumber($embargoIpfilter->enabled);
		$sqlQuery->set($embargoIpfilter->whitelist);
		$sqlQuery->set($embargoIpfilter->blacklist);

		$id = $this->executeInsert($sqlQuery);	
		$embargoIpfilter->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoIpfilterMySql embargoIpfilter
 	 */
	public function update($embargoIpfilter){
		$sql = 'UPDATE embargo_ipfilter SET change_date = ?, changed_by_id = ?, enabled = ?, whitelist = ?, blacklist = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoIpfilter->changeDate);
		$sqlQuery->setNumber($embargoIpfilter->changedById);
		$sqlQuery->setNumber($embargoIpfilter->enabled);
		$sqlQuery->set($embargoIpfilter->whitelist);
		$sqlQuery->set($embargoIpfilter->blacklist);

		$sqlQuery->setNumber($embargoIpfilter->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_ipfilter';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWhitelist($value){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBlacklist($value){
		$sql = 'SELECT * FROM embargo_ipfilter WHERE blacklist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM embargo_ipfilter WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM embargo_ipfilter WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM embargo_ipfilter WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWhitelist($value){
		$sql = 'DELETE FROM embargo_ipfilter WHERE whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBlacklist($value){
		$sql = 'DELETE FROM embargo_ipfilter WHERE blacklist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoIpfilterMySql 
	 */
	protected function readRow($row){
		$embargoIpfilter = new EmbargoIpfilter();
		
		$embargoIpfilter->id = $row['id'];
		$embargoIpfilter->changeDate = $row['change_date'];
		$embargoIpfilter->changedById = $row['changed_by_id'];
		$embargoIpfilter->enabled = $row['enabled'];
		$embargoIpfilter->whitelist = $row['whitelist'];
		$embargoIpfilter->blacklist = $row['blacklist'];

		return $embargoIpfilter;
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
	 * @return EmbargoIpfilterMySql 
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