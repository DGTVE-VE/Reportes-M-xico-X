<?php
/**
 * Class that operate on table 'student_courseenrollmentallowed'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentCourseenrollmentallowedMySqlDAO implements StudentCourseenrollmentallowedDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentCourseenrollmentallowedMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_courseenrollmentallowed WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_courseenrollmentallowed';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_courseenrollmentallowed ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentCourseenrollmentallowed primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_courseenrollmentallowed WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseenrollmentallowedMySql studentCourseenrollmentallowed
 	 */
	public function insert($studentCourseenrollmentallowed){
		$sql = 'INSERT INTO student_courseenrollmentallowed (email, course_id, created, auto_enroll) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentCourseenrollmentallowed->email);
		$sqlQuery->set($studentCourseenrollmentallowed->courseId);
		$sqlQuery->set($studentCourseenrollmentallowed->created);
		$sqlQuery->setNumber($studentCourseenrollmentallowed->autoEnroll);

		$id = $this->executeInsert($sqlQuery);	
		$studentCourseenrollmentallowed->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseenrollmentallowedMySql studentCourseenrollmentallowed
 	 */
	public function update($studentCourseenrollmentallowed){
		$sql = 'UPDATE student_courseenrollmentallowed SET email = ?, course_id = ?, created = ?, auto_enroll = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentCourseenrollmentallowed->email);
		$sqlQuery->set($studentCourseenrollmentallowed->courseId);
		$sqlQuery->set($studentCourseenrollmentallowed->created);
		$sqlQuery->setNumber($studentCourseenrollmentallowed->autoEnroll);

		$sqlQuery->setNumber($studentCourseenrollmentallowed->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_courseenrollmentallowed';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM student_courseenrollmentallowed WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM student_courseenrollmentallowed WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM student_courseenrollmentallowed WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutoEnroll($value){
		$sql = 'SELECT * FROM student_courseenrollmentallowed WHERE auto_enroll = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByEmail($value){
		$sql = 'DELETE FROM student_courseenrollmentallowed WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM student_courseenrollmentallowed WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM student_courseenrollmentallowed WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutoEnroll($value){
		$sql = 'DELETE FROM student_courseenrollmentallowed WHERE auto_enroll = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentCourseenrollmentallowedMySql 
	 */
	protected function readRow($row){
		$studentCourseenrollmentallowed = new StudentCourseenrollmentallowed();
		
		$studentCourseenrollmentallowed->id = $row['id'];
		$studentCourseenrollmentallowed->email = $row['email'];
		$studentCourseenrollmentallowed->courseId = $row['course_id'];
		$studentCourseenrollmentallowed->created = $row['created'];
		$studentCourseenrollmentallowed->autoEnroll = $row['auto_enroll'];

		return $studentCourseenrollmentallowed;
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
	 * @return StudentCourseenrollmentallowedMySql 
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