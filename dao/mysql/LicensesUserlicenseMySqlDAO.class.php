<?php
/**
 * Class that operate on table 'licenses_userlicense'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class LicensesUserlicenseMySqlDAO implements LicensesUserlicenseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LicensesUserlicenseMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM licenses_userlicense WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM licenses_userlicense';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM licenses_userlicense ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param licensesUserlicense primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM licenses_userlicense WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LicensesUserlicenseMySql licensesUserlicense
 	 */
	public function insert($licensesUserlicense){
		$sql = 'INSERT INTO licenses_userlicense (software_id, user_id, serial) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($licensesUserlicense->softwareId);
		$sqlQuery->setNumber($licensesUserlicense->userId);
		$sqlQuery->set($licensesUserlicense->serial);

		$id = $this->executeInsert($sqlQuery);	
		$licensesUserlicense->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LicensesUserlicenseMySql licensesUserlicense
 	 */
	public function update($licensesUserlicense){
		$sql = 'UPDATE licenses_userlicense SET software_id = ?, user_id = ?, serial = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($licensesUserlicense->softwareId);
		$sqlQuery->setNumber($licensesUserlicense->userId);
		$sqlQuery->set($licensesUserlicense->serial);

		$sqlQuery->setNumber($licensesUserlicense->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM licenses_userlicense';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySoftwareId($value){
		$sql = 'SELECT * FROM licenses_userlicense WHERE software_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM licenses_userlicense WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySerial($value){
		$sql = 'SELECT * FROM licenses_userlicense WHERE serial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySoftwareId($value){
		$sql = 'DELETE FROM licenses_userlicense WHERE software_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM licenses_userlicense WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySerial($value){
		$sql = 'DELETE FROM licenses_userlicense WHERE serial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LicensesUserlicenseMySql 
	 */
	protected function readRow($row){
		$licensesUserlicense = new LicensesUserlicense();
		
		$licensesUserlicense->id = $row['id'];
		$licensesUserlicense->softwareId = $row['software_id'];
		$licensesUserlicense->userId = $row['user_id'];
		$licensesUserlicense->serial = $row['serial'];

		return $licensesUserlicense;
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
	 * @return LicensesUserlicenseMySql 
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