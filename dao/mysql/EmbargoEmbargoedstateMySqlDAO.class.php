<?php
/**
 * Class that operate on table 'embargo_embargoedstate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoEmbargoedstateMySqlDAO implements EmbargoEmbargoedstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoEmbargoedstateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_embargoedstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_embargoedstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_embargoedstate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoEmbargoedstate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_embargoedstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoEmbargoedstateMySql embargoEmbargoedstate
 	 */
	public function insert($embargoEmbargoedstate){
		$sql = 'INSERT INTO embargo_embargoedstate (change_date, changed_by_id, enabled, embargoed_countries) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoEmbargoedstate->changeDate);
		$sqlQuery->setNumber($embargoEmbargoedstate->changedById);
		$sqlQuery->setNumber($embargoEmbargoedstate->enabled);
		$sqlQuery->set($embargoEmbargoedstate->embargoedCountries);

		$id = $this->executeInsert($sqlQuery);	
		$embargoEmbargoedstate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoEmbargoedstateMySql embargoEmbargoedstate
 	 */
	public function update($embargoEmbargoedstate){
		$sql = 'UPDATE embargo_embargoedstate SET change_date = ?, changed_by_id = ?, enabled = ?, embargoed_countries = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoEmbargoedstate->changeDate);
		$sqlQuery->setNumber($embargoEmbargoedstate->changedById);
		$sqlQuery->setNumber($embargoEmbargoedstate->enabled);
		$sqlQuery->set($embargoEmbargoedstate->embargoedCountries);

		$sqlQuery->setNumber($embargoEmbargoedstate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_embargoedstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM embargo_embargoedstate WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM embargo_embargoedstate WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM embargo_embargoedstate WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmbargoedCountries($value){
		$sql = 'SELECT * FROM embargo_embargoedstate WHERE embargoed_countries = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM embargo_embargoedstate WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM embargo_embargoedstate WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM embargo_embargoedstate WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmbargoedCountries($value){
		$sql = 'DELETE FROM embargo_embargoedstate WHERE embargoed_countries = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoEmbargoedstateMySql 
	 */
	protected function readRow($row){
		$embargoEmbargoedstate = new EmbargoEmbargoedstate();
		
		$embargoEmbargoedstate->id = $row['id'];
		$embargoEmbargoedstate->changeDate = $row['change_date'];
		$embargoEmbargoedstate->changedById = $row['changed_by_id'];
		$embargoEmbargoedstate->enabled = $row['enabled'];
		$embargoEmbargoedstate->embargoedCountries = $row['embargoed_countries'];

		return $embargoEmbargoedstate;
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
	 * @return EmbargoEmbargoedstateMySql 
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