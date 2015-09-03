<?php
/**
 * Class that operate on table 'student_linkedinaddtoprofileconfiguration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentLinkedinaddtoprofileconfigurationMySqlDAO implements StudentLinkedinaddtoprofileconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentLinkedinaddtoprofileconfigurationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentLinkedinaddtoprofileconfiguration primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentLinkedinaddtoprofileconfigurationMySql studentLinkedinaddtoprofileconfiguration
 	 */
	public function insert($studentLinkedinaddtoprofileconfiguration){
		$sql = 'INSERT INTO student_linkedinaddtoprofileconfiguration (change_date, changed_by_id, enabled, company_identifier) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentLinkedinaddtoprofileconfiguration->changeDate);
		$sqlQuery->setNumber($studentLinkedinaddtoprofileconfiguration->changedById);
		$sqlQuery->setNumber($studentLinkedinaddtoprofileconfiguration->enabled);
		$sqlQuery->set($studentLinkedinaddtoprofileconfiguration->companyIdentifier);

		$id = $this->executeInsert($sqlQuery);	
		$studentLinkedinaddtoprofileconfiguration->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentLinkedinaddtoprofileconfigurationMySql studentLinkedinaddtoprofileconfiguration
 	 */
	public function update($studentLinkedinaddtoprofileconfiguration){
		$sql = 'UPDATE student_linkedinaddtoprofileconfiguration SET change_date = ?, changed_by_id = ?, enabled = ?, company_identifier = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentLinkedinaddtoprofileconfiguration->changeDate);
		$sqlQuery->setNumber($studentLinkedinaddtoprofileconfiguration->changedById);
		$sqlQuery->setNumber($studentLinkedinaddtoprofileconfiguration->enabled);
		$sqlQuery->set($studentLinkedinaddtoprofileconfiguration->companyIdentifier);

		$sqlQuery->setNumber($studentLinkedinaddtoprofileconfiguration->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyIdentifier($value){
		$sql = 'SELECT * FROM student_linkedinaddtoprofileconfiguration WHERE company_identifier = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyIdentifier($value){
		$sql = 'DELETE FROM student_linkedinaddtoprofileconfiguration WHERE company_identifier = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentLinkedinaddtoprofileconfigurationMySql 
	 */
	protected function readRow($row){
		$studentLinkedinaddtoprofileconfiguration = new StudentLinkedinaddtoprofileconfiguration();
		
		$studentLinkedinaddtoprofileconfiguration->id = $row['id'];
		$studentLinkedinaddtoprofileconfiguration->changeDate = $row['change_date'];
		$studentLinkedinaddtoprofileconfiguration->changedById = $row['changed_by_id'];
		$studentLinkedinaddtoprofileconfiguration->enabled = $row['enabled'];
		$studentLinkedinaddtoprofileconfiguration->companyIdentifier = $row['company_identifier'];

		return $studentLinkedinaddtoprofileconfiguration;
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
	 * @return StudentLinkedinaddtoprofileconfigurationMySql 
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