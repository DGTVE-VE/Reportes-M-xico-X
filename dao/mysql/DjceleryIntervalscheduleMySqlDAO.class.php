<?php
/**
 * Class that operate on table 'djcelery_intervalschedule'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjceleryIntervalscheduleMySqlDAO implements DjceleryIntervalscheduleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjceleryIntervalscheduleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM djcelery_intervalschedule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM djcelery_intervalschedule';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM djcelery_intervalschedule ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djceleryIntervalschedule primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM djcelery_intervalschedule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryIntervalscheduleMySql djceleryIntervalschedule
 	 */
	public function insert($djceleryIntervalschedule){
		$sql = 'INSERT INTO djcelery_intervalschedule (every, period) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djceleryIntervalschedule->every);
		$sqlQuery->set($djceleryIntervalschedule->period);

		$id = $this->executeInsert($sqlQuery);	
		$djceleryIntervalschedule->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryIntervalscheduleMySql djceleryIntervalschedule
 	 */
	public function update($djceleryIntervalschedule){
		$sql = 'UPDATE djcelery_intervalschedule SET every = ?, period = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($djceleryIntervalschedule->every);
		$sqlQuery->set($djceleryIntervalschedule->period);

		$sqlQuery->setNumber($djceleryIntervalschedule->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM djcelery_intervalschedule';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByEvery($value){
		$sql = 'SELECT * FROM djcelery_intervalschedule WHERE every = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPeriod($value){
		$sql = 'SELECT * FROM djcelery_intervalschedule WHERE period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByEvery($value){
		$sql = 'DELETE FROM djcelery_intervalschedule WHERE every = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPeriod($value){
		$sql = 'DELETE FROM djcelery_intervalschedule WHERE period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjceleryIntervalscheduleMySql 
	 */
	protected function readRow($row){
		$djceleryIntervalschedule = new DjceleryIntervalschedule();
		
		$djceleryIntervalschedule->id = $row['id'];
		$djceleryIntervalschedule->every = $row['every'];
		$djceleryIntervalschedule->period = $row['period'];

		return $djceleryIntervalschedule;
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
	 * @return DjceleryIntervalscheduleMySql 
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