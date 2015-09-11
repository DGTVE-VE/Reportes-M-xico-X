<?php
/**
 * Class that operate on table 'course_action_state_coursererunstate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseNameMySqlDAO implements CourseNameDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseNameMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_name WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setString($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_name';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_name ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseActionStateCoursererunstate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_name WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setString($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseActionStateCoursererunstateMySql courseActionStateCoursererunstate
 	 */
	public function insert($courseName){
		$sql = 'INSERT INTO course_action_state_coursererunstate (created_time, updated_time, created_user_id, updated_user_id, course_key, action, state, should_display, message, source_course_key, display_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseName->courseId);
		$sqlQuery->set($courseName->courseName);
		$id = $this->executeInsert($sqlQuery);	
		$courseActionStateCoursererunstate->courseId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseActionStateCoursererunstateMySql courseActionStateCoursererunstate
 	 */
	public function update($courseName){
		$sql = 'UPDATE course_name SET course_id = ?, course_name = ? WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseName->courseId);
		$sqlQuery->set($courseName->courseName);
		$sqlQuery->setString($courseName->courseid);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_name';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM course_name WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseName($value){
		$sql = 'SELECT * FROM course_name WHERE course_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	
	public function deleteByCourseName($value){
		$sql = 'DELETE FROM course_name WHERE course_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM course_name WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	/**
	 * Read row
	 *
	 * @return courseNameMySql 
	 */
	protected function readRow($row){
		$courseName = new CourseActionStateCoursererunstate();
		
		$courseName->courseId = $row['course_id'];
		$courseName->courseName = $row['course_name'];

		return $courseName;
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
	 * @return courseNameMySql 
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