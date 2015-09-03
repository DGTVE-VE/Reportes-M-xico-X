<?php
/**
 * Class that operate on table 'student_pendingnamechange'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentPendingnamechangeMySqlDAO implements StudentPendingnamechangeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentPendingnamechangeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_pendingnamechange WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_pendingnamechange';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_pendingnamechange ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentPendingnamechange primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_pendingnamechange WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentPendingnamechangeMySql studentPendingnamechange
 	 */
	public function insert($studentPendingnamechange){
		$sql = 'INSERT INTO student_pendingnamechange (user_id, new_name, rationale) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentPendingnamechange->userId);
		$sqlQuery->set($studentPendingnamechange->newName);
		$sqlQuery->set($studentPendingnamechange->rationale);

		$id = $this->executeInsert($sqlQuery);	
		$studentPendingnamechange->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentPendingnamechangeMySql studentPendingnamechange
 	 */
	public function update($studentPendingnamechange){
		$sql = 'UPDATE student_pendingnamechange SET user_id = ?, new_name = ?, rationale = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentPendingnamechange->userId);
		$sqlQuery->set($studentPendingnamechange->newName);
		$sqlQuery->set($studentPendingnamechange->rationale);

		$sqlQuery->setNumber($studentPendingnamechange->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_pendingnamechange';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_pendingnamechange WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNewName($value){
		$sql = 'SELECT * FROM student_pendingnamechange WHERE new_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRationale($value){
		$sql = 'SELECT * FROM student_pendingnamechange WHERE rationale = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_pendingnamechange WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNewName($value){
		$sql = 'DELETE FROM student_pendingnamechange WHERE new_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRationale($value){
		$sql = 'DELETE FROM student_pendingnamechange WHERE rationale = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentPendingnamechangeMySql 
	 */
	protected function readRow($row){
		$studentPendingnamechange = new StudentPendingnamechange();
		
		$studentPendingnamechange->id = $row['id'];
		$studentPendingnamechange->userId = $row['user_id'];
		$studentPendingnamechange->newName = $row['new_name'];
		$studentPendingnamechange->rationale = $row['rationale'];

		return $studentPendingnamechange;
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
	 * @return StudentPendingnamechangeMySql 
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