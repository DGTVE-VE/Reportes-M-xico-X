<?php
/**
 * Class that operate on table 'dark_lang_darklangconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DarkLangDarklangconfigMySqlDAO implements DarkLangDarklangconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DarkLangDarklangconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM dark_lang_darklangconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM dark_lang_darklangconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM dark_lang_darklangconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param darkLangDarklangconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM dark_lang_darklangconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DarkLangDarklangconfigMySql darkLangDarklangconfig
 	 */
	public function insert($darkLangDarklangconfig){
		$sql = 'INSERT INTO dark_lang_darklangconfig (change_date, changed_by_id, enabled, released_languages) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($darkLangDarklangconfig->changeDate);
		$sqlQuery->setNumber($darkLangDarklangconfig->changedById);
		$sqlQuery->setNumber($darkLangDarklangconfig->enabled);
		$sqlQuery->set($darkLangDarklangconfig->releasedLanguages);

		$id = $this->executeInsert($sqlQuery);	
		$darkLangDarklangconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DarkLangDarklangconfigMySql darkLangDarklangconfig
 	 */
	public function update($darkLangDarklangconfig){
		$sql = 'UPDATE dark_lang_darklangconfig SET change_date = ?, changed_by_id = ?, enabled = ?, released_languages = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($darkLangDarklangconfig->changeDate);
		$sqlQuery->setNumber($darkLangDarklangconfig->changedById);
		$sqlQuery->setNumber($darkLangDarklangconfig->enabled);
		$sqlQuery->set($darkLangDarklangconfig->releasedLanguages);

		$sqlQuery->setNumber($darkLangDarklangconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM dark_lang_darklangconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM dark_lang_darklangconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM dark_lang_darklangconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM dark_lang_darklangconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReleasedLanguages($value){
		$sql = 'SELECT * FROM dark_lang_darklangconfig WHERE released_languages = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM dark_lang_darklangconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM dark_lang_darklangconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM dark_lang_darklangconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReleasedLanguages($value){
		$sql = 'DELETE FROM dark_lang_darklangconfig WHERE released_languages = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DarkLangDarklangconfigMySql 
	 */
	protected function readRow($row){
		$darkLangDarklangconfig = new DarkLangDarklangconfig();
		
		$darkLangDarklangconfig->id = $row['id'];
		$darkLangDarklangconfig->changeDate = $row['change_date'];
		$darkLangDarklangconfig->changedById = $row['changed_by_id'];
		$darkLangDarklangconfig->enabled = $row['enabled'];
		$darkLangDarklangconfig->releasedLanguages = $row['released_languages'];

		return $darkLangDarklangconfig;
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
	 * @return DarkLangDarklangconfigMySql 
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