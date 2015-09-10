<?php
/**
 * Class that operate on table 'student_userstanding'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentUserstandingMySqlDAO implements StudentUserstandingDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentUserstandingMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_userstanding WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_userstanding';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_userstanding ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentUserstanding primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_userstanding WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUserstandingMySql studentUserstanding
 	 */
	public function insert($studentUserstanding){
		$sql = 'INSERT INTO student_userstanding (user_id, account_status, changed_by_id, standing_last_changed_at) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentUserstanding->userId);
		$sqlQuery->set($studentUserstanding->accountStatus);
		$sqlQuery->setNumber($studentUserstanding->changedById);
		$sqlQuery->set($studentUserstanding->standingLastChangedAt);

		$id = $this->executeInsert($sqlQuery);	
		$studentUserstanding->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUserstandingMySql studentUserstanding
 	 */
	public function update($studentUserstanding){
		$sql = 'UPDATE student_userstanding SET user_id = ?, account_status = ?, changed_by_id = ?, standing_last_changed_at = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentUserstanding->userId);
		$sqlQuery->set($studentUserstanding->accountStatus);
		$sqlQuery->setNumber($studentUserstanding->changedById);
		$sqlQuery->set($studentUserstanding->standingLastChangedAt);

		$sqlQuery->setNumber($studentUserstanding->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_userstanding';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_userstanding WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountStatus($value){
		$sql = 'SELECT * FROM student_userstanding WHERE account_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM student_userstanding WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStandingLastChangedAt($value){
		$sql = 'SELECT * FROM student_userstanding WHERE standing_last_changed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_userstanding WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountStatus($value){
		$sql = 'DELETE FROM student_userstanding WHERE account_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM student_userstanding WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStandingLastChangedAt($value){
		$sql = 'DELETE FROM student_userstanding WHERE standing_last_changed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentUserstandingMySql 
	 */
	protected function readRow($row){
		$studentUserstanding = new StudentUserstanding();
		
		$studentUserstanding->id = $row['id'];
		$studentUserstanding->userId = $row['user_id'];
		$studentUserstanding->accountStatus = $row['account_status'];
		$studentUserstanding->changedById = $row['changed_by_id'];
		$studentUserstanding->standingLastChangedAt = $row['standing_last_changed_at'];

		return $studentUserstanding;
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
	 * @return StudentUserstandingMySql 
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