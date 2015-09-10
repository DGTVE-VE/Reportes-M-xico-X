<?php
/**
 * Class that operate on table 'student_anonymoususerid'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentAnonymoususeridMySqlDAO implements StudentAnonymoususeridDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentAnonymoususeridMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_anonymoususerid WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_anonymoususerid';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_anonymoususerid ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentAnonymoususerid primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_anonymoususerid WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentAnonymoususeridMySql studentAnonymoususerid
 	 */
	public function insert($studentAnonymoususerid){
		$sql = 'INSERT INTO student_anonymoususerid (user_id, anonymous_user_id, course_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentAnonymoususerid->userId);
		$sqlQuery->set($studentAnonymoususerid->anonymousUserId);
		$sqlQuery->set($studentAnonymoususerid->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$studentAnonymoususerid->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentAnonymoususeridMySql studentAnonymoususerid
 	 */
	public function update($studentAnonymoususerid){
		$sql = 'UPDATE student_anonymoususerid SET user_id = ?, anonymous_user_id = ?, course_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentAnonymoususerid->userId);
		$sqlQuery->set($studentAnonymoususerid->anonymousUserId);
		$sqlQuery->set($studentAnonymoususerid->courseId);

		$sqlQuery->setNumber($studentAnonymoususerid->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_anonymoususerid';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_anonymoususerid WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnonymousUserId($value){
		$sql = 'SELECT * FROM student_anonymoususerid WHERE anonymous_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM student_anonymoususerid WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_anonymoususerid WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnonymousUserId($value){
		$sql = 'DELETE FROM student_anonymoususerid WHERE anonymous_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM student_anonymoususerid WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentAnonymoususeridMySql 
	 */
	protected function readRow($row){
		$studentAnonymoususerid = new StudentAnonymoususerid();
		
		$studentAnonymoususerid->id = $row['id'];
		$studentAnonymoususerid->userId = $row['user_id'];
		$studentAnonymoususerid->anonymousUserId = $row['anonymous_user_id'];
		$studentAnonymoususerid->courseId = $row['course_id'];

		return $studentAnonymoususerid;
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
	 * @return StudentAnonymoususeridMySql 
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