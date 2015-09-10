<?php
/**
 * Class that operate on table 'student_courseenrollment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentCourseenrollmentMySqlDAO implements StudentCourseenrollmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentCourseenrollmentMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_courseenrollment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_courseenrollment';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_courseenrollment ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentCourseenrollment primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_courseenrollment WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseenrollmentMySql studentCourseenrollment
 	 */
	public function insert($studentCourseenrollment){
		$sql = 'INSERT INTO student_courseenrollment (user_id, course_id, created, is_active, mode) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentCourseenrollment->userId);
		$sqlQuery->set($studentCourseenrollment->courseId);
		$sqlQuery->set($studentCourseenrollment->created);
		$sqlQuery->setNumber($studentCourseenrollment->isActive);
		$sqlQuery->set($studentCourseenrollment->mode);

		$id = $this->executeInsert($sqlQuery);	
		$studentCourseenrollment->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseenrollmentMySql studentCourseenrollment
 	 */
	public function update($studentCourseenrollment){
		$sql = 'UPDATE student_courseenrollment SET user_id = ?, course_id = ?, created = ?, is_active = ?, mode = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentCourseenrollment->userId);
		$sqlQuery->set($studentCourseenrollment->courseId);
		$sqlQuery->set($studentCourseenrollment->created);
		$sqlQuery->setNumber($studentCourseenrollment->isActive);
		$sqlQuery->set($studentCourseenrollment->mode);

		$sqlQuery->setNumber($studentCourseenrollment->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_courseenrollment';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_courseenrollment WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM student_courseenrollment WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM student_courseenrollment WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsActive($value){
		$sql = 'SELECT * FROM student_courseenrollment WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMode($value){
		$sql = 'SELECT * FROM student_courseenrollment WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_courseenrollment WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM student_courseenrollment WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM student_courseenrollment WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsActive($value){
		$sql = 'DELETE FROM student_courseenrollment WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMode($value){
		$sql = 'DELETE FROM student_courseenrollment WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentCourseenrollmentMySql 
	 */
	protected function readRow($row){
		$studentCourseenrollment = new StudentCourseenrollment();
		
		$studentCourseenrollment->id = $row['id'];
		$studentCourseenrollment->userId = $row['user_id'];
		$studentCourseenrollment->courseId = $row['course_id'];
		$studentCourseenrollment->created = $row['created'];
		$studentCourseenrollment->isActive = $row['is_active'];
		$studentCourseenrollment->mode = $row['mode'];

		return $studentCourseenrollment;
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
	 * @return StudentCourseenrollmentMySql 
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