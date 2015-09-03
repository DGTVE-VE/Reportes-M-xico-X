<?php
/**
 * Class that operate on table 'student_pendingemailchange'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentPendingemailchangeMySqlDAO implements StudentPendingemailchangeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentPendingemailchangeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_pendingemailchange WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_pendingemailchange';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_pendingemailchange ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentPendingemailchange primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_pendingemailchange WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentPendingemailchangeMySql studentPendingemailchange
 	 */
	public function insert($studentPendingemailchange){
		$sql = 'INSERT INTO student_pendingemailchange (user_id, new_email, activation_key) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentPendingemailchange->userId);
		$sqlQuery->set($studentPendingemailchange->newEmail);
		$sqlQuery->set($studentPendingemailchange->activationKey);

		$id = $this->executeInsert($sqlQuery);	
		$studentPendingemailchange->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentPendingemailchangeMySql studentPendingemailchange
 	 */
	public function update($studentPendingemailchange){
		$sql = 'UPDATE student_pendingemailchange SET user_id = ?, new_email = ?, activation_key = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentPendingemailchange->userId);
		$sqlQuery->set($studentPendingemailchange->newEmail);
		$sqlQuery->set($studentPendingemailchange->activationKey);

		$sqlQuery->setNumber($studentPendingemailchange->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_pendingemailchange';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_pendingemailchange WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNewEmail($value){
		$sql = 'SELECT * FROM student_pendingemailchange WHERE new_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActivationKey($value){
		$sql = 'SELECT * FROM student_pendingemailchange WHERE activation_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_pendingemailchange WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNewEmail($value){
		$sql = 'DELETE FROM student_pendingemailchange WHERE new_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActivationKey($value){
		$sql = 'DELETE FROM student_pendingemailchange WHERE activation_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentPendingemailchangeMySql 
	 */
	protected function readRow($row){
		$studentPendingemailchange = new StudentPendingemailchange();
		
		$studentPendingemailchange->id = $row['id'];
		$studentPendingemailchange->userId = $row['user_id'];
		$studentPendingemailchange->newEmail = $row['new_email'];
		$studentPendingemailchange->activationKey = $row['activation_key'];

		return $studentPendingemailchange;
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
	 * @return StudentPendingemailchangeMySql 
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