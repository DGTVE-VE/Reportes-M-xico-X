<?php
/**
 * Class that operate on table 'contentstore_videouploadconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ContentstoreVideouploadconfigMySqlDAO implements ContentstoreVideouploadconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ContentstoreVideouploadconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM contentstore_videouploadconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM contentstore_videouploadconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM contentstore_videouploadconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param contentstoreVideouploadconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM contentstore_videouploadconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ContentstoreVideouploadconfigMySql contentstoreVideouploadconfig
 	 */
	public function insert($contentstoreVideouploadconfig){
		$sql = 'INSERT INTO contentstore_videouploadconfig (change_date, changed_by_id, enabled, profile_whitelist) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contentstoreVideouploadconfig->changeDate);
		$sqlQuery->setNumber($contentstoreVideouploadconfig->changedById);
		$sqlQuery->setNumber($contentstoreVideouploadconfig->enabled);
		$sqlQuery->set($contentstoreVideouploadconfig->profileWhitelist);

		$id = $this->executeInsert($sqlQuery);	
		$contentstoreVideouploadconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ContentstoreVideouploadconfigMySql contentstoreVideouploadconfig
 	 */
	public function update($contentstoreVideouploadconfig){
		$sql = 'UPDATE contentstore_videouploadconfig SET change_date = ?, changed_by_id = ?, enabled = ?, profile_whitelist = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contentstoreVideouploadconfig->changeDate);
		$sqlQuery->setNumber($contentstoreVideouploadconfig->changedById);
		$sqlQuery->setNumber($contentstoreVideouploadconfig->enabled);
		$sqlQuery->set($contentstoreVideouploadconfig->profileWhitelist);

		$sqlQuery->setNumber($contentstoreVideouploadconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM contentstore_videouploadconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM contentstore_videouploadconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM contentstore_videouploadconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM contentstore_videouploadconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProfileWhitelist($value){
		$sql = 'SELECT * FROM contentstore_videouploadconfig WHERE profile_whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM contentstore_videouploadconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM contentstore_videouploadconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM contentstore_videouploadconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProfileWhitelist($value){
		$sql = 'DELETE FROM contentstore_videouploadconfig WHERE profile_whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ContentstoreVideouploadconfigMySql 
	 */
	protected function readRow($row){
		$contentstoreVideouploadconfig = new ContentstoreVideouploadconfig();
		
		$contentstoreVideouploadconfig->id = $row['id'];
		$contentstoreVideouploadconfig->changeDate = $row['change_date'];
		$contentstoreVideouploadconfig->changedById = $row['changed_by_id'];
		$contentstoreVideouploadconfig->enabled = $row['enabled'];
		$contentstoreVideouploadconfig->profileWhitelist = $row['profile_whitelist'];

		return $contentstoreVideouploadconfig;
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
	 * @return ContentstoreVideouploadconfigMySql 
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