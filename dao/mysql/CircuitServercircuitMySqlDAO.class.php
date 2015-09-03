<?php
/**
 * Class that operate on table 'circuit_servercircuit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CircuitServercircuitMySqlDAO implements CircuitServercircuitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CircuitServercircuitMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM circuit_servercircuit WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM circuit_servercircuit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM circuit_servercircuit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param circuitServercircuit primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM circuit_servercircuit WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CircuitServercircuitMySql circuitServercircuit
 	 */
	public function insert($circuitServercircuit){
		$sql = 'INSERT INTO circuit_servercircuit (name, schematic) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($circuitServercircuit->name);
		$sqlQuery->set($circuitServercircuit->schematic);

		$id = $this->executeInsert($sqlQuery);	
		$circuitServercircuit->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CircuitServercircuitMySql circuitServercircuit
 	 */
	public function update($circuitServercircuit){
		$sql = 'UPDATE circuit_servercircuit SET name = ?, schematic = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($circuitServercircuit->name);
		$sqlQuery->set($circuitServercircuit->schematic);

		$sqlQuery->setNumber($circuitServercircuit->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM circuit_servercircuit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM circuit_servercircuit WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySchematic($value){
		$sql = 'SELECT * FROM circuit_servercircuit WHERE schematic = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM circuit_servercircuit WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySchematic($value){
		$sql = 'DELETE FROM circuit_servercircuit WHERE schematic = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CircuitServercircuitMySql 
	 */
	protected function readRow($row){
		$circuitServercircuit = new CircuitServercircuit();
		
		$circuitServercircuit->id = $row['id'];
		$circuitServercircuit->name = $row['name'];
		$circuitServercircuit->schematic = $row['schematic'];

		return $circuitServercircuit;
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
	 * @return CircuitServercircuitMySql 
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