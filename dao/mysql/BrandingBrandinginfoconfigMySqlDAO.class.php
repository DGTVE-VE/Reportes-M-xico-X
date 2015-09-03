<?php
/**
 * Class that operate on table 'branding_brandinginfoconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class BrandingBrandinginfoconfigMySqlDAO implements BrandingBrandinginfoconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BrandingBrandinginfoconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM branding_brandinginfoconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM branding_brandinginfoconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM branding_brandinginfoconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param brandingBrandinginfoconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM branding_brandinginfoconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BrandingBrandinginfoconfigMySql brandingBrandinginfoconfig
 	 */
	public function insert($brandingBrandinginfoconfig){
		$sql = 'INSERT INTO branding_brandinginfoconfig (change_date, changed_by_id, enabled, configuration) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($brandingBrandinginfoconfig->changeDate);
		$sqlQuery->setNumber($brandingBrandinginfoconfig->changedById);
		$sqlQuery->setNumber($brandingBrandinginfoconfig->enabled);
		$sqlQuery->set($brandingBrandinginfoconfig->configuration);

		$id = $this->executeInsert($sqlQuery);	
		$brandingBrandinginfoconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BrandingBrandinginfoconfigMySql brandingBrandinginfoconfig
 	 */
	public function update($brandingBrandinginfoconfig){
		$sql = 'UPDATE branding_brandinginfoconfig SET change_date = ?, changed_by_id = ?, enabled = ?, configuration = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($brandingBrandinginfoconfig->changeDate);
		$sqlQuery->setNumber($brandingBrandinginfoconfig->changedById);
		$sqlQuery->setNumber($brandingBrandinginfoconfig->enabled);
		$sqlQuery->set($brandingBrandinginfoconfig->configuration);

		$sqlQuery->setNumber($brandingBrandinginfoconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM branding_brandinginfoconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM branding_brandinginfoconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM branding_brandinginfoconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM branding_brandinginfoconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByConfiguration($value){
		$sql = 'SELECT * FROM branding_brandinginfoconfig WHERE configuration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM branding_brandinginfoconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM branding_brandinginfoconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM branding_brandinginfoconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByConfiguration($value){
		$sql = 'DELETE FROM branding_brandinginfoconfig WHERE configuration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BrandingBrandinginfoconfigMySql 
	 */
	protected function readRow($row){
		$brandingBrandinginfoconfig = new BrandingBrandinginfoconfig();
		
		$brandingBrandinginfoconfig->id = $row['id'];
		$brandingBrandinginfoconfig->changeDate = $row['change_date'];
		$brandingBrandinginfoconfig->changedById = $row['changed_by_id'];
		$brandingBrandinginfoconfig->enabled = $row['enabled'];
		$brandingBrandinginfoconfig->configuration = $row['configuration'];

		return $brandingBrandinginfoconfig;
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
	 * @return BrandingBrandinginfoconfigMySql 
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