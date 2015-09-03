<?php
/**
 * Class that operate on table 'xblock_config_studioconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class XblockConfigStudioconfigMySqlDAO implements XblockConfigStudioconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return XblockConfigStudioconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM xblock_config_studioconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM xblock_config_studioconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM xblock_config_studioconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param xblockConfigStudioconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM xblock_config_studioconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param XblockConfigStudioconfigMySql xblockConfigStudioconfig
 	 */
	public function insert($xblockConfigStudioconfig){
		$sql = 'INSERT INTO xblock_config_studioconfig (change_date, changed_by_id, enabled, disabled_blocks) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($xblockConfigStudioconfig->changeDate);
		$sqlQuery->setNumber($xblockConfigStudioconfig->changedById);
		$sqlQuery->setNumber($xblockConfigStudioconfig->enabled);
		$sqlQuery->set($xblockConfigStudioconfig->disabledBlocks);

		$id = $this->executeInsert($sqlQuery);	
		$xblockConfigStudioconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param XblockConfigStudioconfigMySql xblockConfigStudioconfig
 	 */
	public function update($xblockConfigStudioconfig){
		$sql = 'UPDATE xblock_config_studioconfig SET change_date = ?, changed_by_id = ?, enabled = ?, disabled_blocks = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($xblockConfigStudioconfig->changeDate);
		$sqlQuery->setNumber($xblockConfigStudioconfig->changedById);
		$sqlQuery->setNumber($xblockConfigStudioconfig->enabled);
		$sqlQuery->set($xblockConfigStudioconfig->disabledBlocks);

		$sqlQuery->setNumber($xblockConfigStudioconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM xblock_config_studioconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM xblock_config_studioconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM xblock_config_studioconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM xblock_config_studioconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisabledBlocks($value){
		$sql = 'SELECT * FROM xblock_config_studioconfig WHERE disabled_blocks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM xblock_config_studioconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM xblock_config_studioconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM xblock_config_studioconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisabledBlocks($value){
		$sql = 'DELETE FROM xblock_config_studioconfig WHERE disabled_blocks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return XblockConfigStudioconfigMySql 
	 */
	protected function readRow($row){
		$xblockConfigStudioconfig = new XblockConfigStudioconfig();
		
		$xblockConfigStudioconfig->id = $row['id'];
		$xblockConfigStudioconfig->changeDate = $row['change_date'];
		$xblockConfigStudioconfig->changedById = $row['changed_by_id'];
		$xblockConfigStudioconfig->enabled = $row['enabled'];
		$xblockConfigStudioconfig->disabledBlocks = $row['disabled_blocks'];

		return $xblockConfigStudioconfig;
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
	 * @return XblockConfigStudioconfigMySql 
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