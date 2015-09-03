<?php
/**
 * Class that operate on table 'embargo_courseaccessrulehistory'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoCourseaccessrulehistoryMySqlDAO implements EmbargoCourseaccessrulehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoCourseaccessrulehistoryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoCourseaccessrulehistory primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_courseaccessrulehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoCourseaccessrulehistoryMySql embargoCourseaccessrulehistory
 	 */
	public function insert($embargoCourseaccessrulehistory){
		$sql = 'INSERT INTO embargo_courseaccessrulehistory (timestamp, course_key, snapshot) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoCourseaccessrulehistory->timestamp);
		$sqlQuery->set($embargoCourseaccessrulehistory->courseKey);
		$sqlQuery->set($embargoCourseaccessrulehistory->snapshot);

		$id = $this->executeInsert($sqlQuery);	
		$embargoCourseaccessrulehistory->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoCourseaccessrulehistoryMySql embargoCourseaccessrulehistory
 	 */
	public function update($embargoCourseaccessrulehistory){
		$sql = 'UPDATE embargo_courseaccessrulehistory SET timestamp = ?, course_key = ?, snapshot = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoCourseaccessrulehistory->timestamp);
		$sqlQuery->set($embargoCourseaccessrulehistory->courseKey);
		$sqlQuery->set($embargoCourseaccessrulehistory->snapshot);

		$sqlQuery->setNumber($embargoCourseaccessrulehistory->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_courseaccessrulehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTimestamp($value){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseKey($value){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySnapshot($value){
		$sql = 'SELECT * FROM embargo_courseaccessrulehistory WHERE snapshot = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTimestamp($value){
		$sql = 'DELETE FROM embargo_courseaccessrulehistory WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseKey($value){
		$sql = 'DELETE FROM embargo_courseaccessrulehistory WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySnapshot($value){
		$sql = 'DELETE FROM embargo_courseaccessrulehistory WHERE snapshot = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoCourseaccessrulehistoryMySql 
	 */
	protected function readRow($row){
		$embargoCourseaccessrulehistory = new EmbargoCourseaccessrulehistory();
		
		$embargoCourseaccessrulehistory->id = $row['id'];
		$embargoCourseaccessrulehistory->timestamp = $row['timestamp'];
		$embargoCourseaccessrulehistory->courseKey = $row['course_key'];
		$embargoCourseaccessrulehistory->snapshot = $row['snapshot'];

		return $embargoCourseaccessrulehistory;
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
	 * @return EmbargoCourseaccessrulehistoryMySql 
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