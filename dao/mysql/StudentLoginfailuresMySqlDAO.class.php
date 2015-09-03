<?php
/**
 * Class that operate on table 'student_loginfailures'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentLoginfailuresMySqlDAO implements StudentLoginfailuresDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentLoginfailuresMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_loginfailures WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_loginfailures';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_loginfailures ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentLoginfailure primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_loginfailures WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentLoginfailuresMySql studentLoginfailure
 	 */
	public function insert($studentLoginfailure){
		$sql = 'INSERT INTO student_loginfailures (user_id, failure_count, lockout_until) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentLoginfailure->userId);
		$sqlQuery->setNumber($studentLoginfailure->failureCount);
		$sqlQuery->set($studentLoginfailure->lockoutUntil);

		$id = $this->executeInsert($sqlQuery);	
		$studentLoginfailure->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentLoginfailuresMySql studentLoginfailure
 	 */
	public function update($studentLoginfailure){
		$sql = 'UPDATE student_loginfailures SET user_id = ?, failure_count = ?, lockout_until = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentLoginfailure->userId);
		$sqlQuery->setNumber($studentLoginfailure->failureCount);
		$sqlQuery->set($studentLoginfailure->lockoutUntil);

		$sqlQuery->setNumber($studentLoginfailure->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_loginfailures';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_loginfailures WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFailureCount($value){
		$sql = 'SELECT * FROM student_loginfailures WHERE failure_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLockoutUntil($value){
		$sql = 'SELECT * FROM student_loginfailures WHERE lockout_until = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_loginfailures WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFailureCount($value){
		$sql = 'DELETE FROM student_loginfailures WHERE failure_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLockoutUntil($value){
		$sql = 'DELETE FROM student_loginfailures WHERE lockout_until = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentLoginfailuresMySql 
	 */
	protected function readRow($row){
		$studentLoginfailure = new StudentLoginfailure();
		
		$studentLoginfailure->id = $row['id'];
		$studentLoginfailure->userId = $row['user_id'];
		$studentLoginfailure->failureCount = $row['failure_count'];
		$studentLoginfailure->lockoutUntil = $row['lockout_until'];

		return $studentLoginfailure;
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
	 * @return StudentLoginfailuresMySql 
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