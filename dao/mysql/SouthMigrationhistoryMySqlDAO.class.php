<?php
/**
 * Class that operate on table 'south_migrationhistory'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SouthMigrationhistoryMySqlDAO implements SouthMigrationhistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SouthMigrationhistoryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM south_migrationhistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM south_migrationhistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM south_migrationhistory ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param southMigrationhistory primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM south_migrationhistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SouthMigrationhistoryMySql southMigrationhistory
 	 */
	public function insert($southMigrationhistory){
		$sql = 'INSERT INTO south_migrationhistory (app_name, migration, applied) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($southMigrationhistory->appName);
		$sqlQuery->set($southMigrationhistory->migration);
		$sqlQuery->set($southMigrationhistory->applied);

		$id = $this->executeInsert($sqlQuery);	
		$southMigrationhistory->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SouthMigrationhistoryMySql southMigrationhistory
 	 */
	public function update($southMigrationhistory){
		$sql = 'UPDATE south_migrationhistory SET app_name = ?, migration = ?, applied = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($southMigrationhistory->appName);
		$sqlQuery->set($southMigrationhistory->migration);
		$sqlQuery->set($southMigrationhistory->applied);

		$sqlQuery->setNumber($southMigrationhistory->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM south_migrationhistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAppName($value){
		$sql = 'SELECT * FROM south_migrationhistory WHERE app_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMigration($value){
		$sql = 'SELECT * FROM south_migrationhistory WHERE migration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApplied($value){
		$sql = 'SELECT * FROM south_migrationhistory WHERE applied = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAppName($value){
		$sql = 'DELETE FROM south_migrationhistory WHERE app_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMigration($value){
		$sql = 'DELETE FROM south_migrationhistory WHERE migration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApplied($value){
		$sql = 'DELETE FROM south_migrationhistory WHERE applied = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SouthMigrationhistoryMySql 
	 */
	protected function readRow($row){
		$southMigrationhistory = new SouthMigrationhistory();
		
		$southMigrationhistory->id = $row['id'];
		$southMigrationhistory->appName = $row['app_name'];
		$southMigrationhistory->migration = $row['migration'];
		$southMigrationhistory->applied = $row['applied'];

		return $southMigrationhistory;
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
	 * @return SouthMigrationhistoryMySql 
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