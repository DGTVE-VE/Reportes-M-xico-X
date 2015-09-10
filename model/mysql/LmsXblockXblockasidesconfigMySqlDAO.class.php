<?php
/**
 * Class that operate on table 'lms_xblock_xblockasidesconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class LmsXblockXblockasidesconfigMySqlDAO implements LmsXblockXblockasidesconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LmsXblockXblockasidesconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param lmsXblockXblockasidesconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LmsXblockXblockasidesconfigMySql lmsXblockXblockasidesconfig
 	 */
	public function insert($lmsXblockXblockasidesconfig){
		$sql = 'INSERT INTO lms_xblock_xblockasidesconfig (change_date, changed_by_id, enabled, disabled_blocks) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($lmsXblockXblockasidesconfig->changeDate);
		$sqlQuery->setNumber($lmsXblockXblockasidesconfig->changedById);
		$sqlQuery->setNumber($lmsXblockXblockasidesconfig->enabled);
		$sqlQuery->set($lmsXblockXblockasidesconfig->disabledBlocks);

		$id = $this->executeInsert($sqlQuery);	
		$lmsXblockXblockasidesconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LmsXblockXblockasidesconfigMySql lmsXblockXblockasidesconfig
 	 */
	public function update($lmsXblockXblockasidesconfig){
		$sql = 'UPDATE lms_xblock_xblockasidesconfig SET change_date = ?, changed_by_id = ?, enabled = ?, disabled_blocks = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($lmsXblockXblockasidesconfig->changeDate);
		$sqlQuery->setNumber($lmsXblockXblockasidesconfig->changedById);
		$sqlQuery->setNumber($lmsXblockXblockasidesconfig->enabled);
		$sqlQuery->set($lmsXblockXblockasidesconfig->disabledBlocks);

		$sqlQuery->setNumber($lmsXblockXblockasidesconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisabledBlocks($value){
		$sql = 'SELECT * FROM lms_xblock_xblockasidesconfig WHERE disabled_blocks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisabledBlocks($value){
		$sql = 'DELETE FROM lms_xblock_xblockasidesconfig WHERE disabled_blocks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LmsXblockXblockasidesconfigMySql 
	 */
	protected function readRow($row){
		$lmsXblockXblockasidesconfig = new LmsXblockXblockasidesconfig();
		
		$lmsXblockXblockasidesconfig->id = $row['id'];
		$lmsXblockXblockasidesconfig->changeDate = $row['change_date'];
		$lmsXblockXblockasidesconfig->changedById = $row['changed_by_id'];
		$lmsXblockXblockasidesconfig->enabled = $row['enabled'];
		$lmsXblockXblockasidesconfig->disabledBlocks = $row['disabled_blocks'];

		return $lmsXblockXblockasidesconfig;
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
	 * @return LmsXblockXblockasidesconfigMySql 
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