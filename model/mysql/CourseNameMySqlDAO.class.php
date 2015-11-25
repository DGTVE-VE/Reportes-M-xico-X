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
		$sql = 'INSERT INTO course_name
                        (course_id, course_name, inicio, fin, inicio_inscripcion, fin_inscripcion)
                        VALUES (?,?,?,?,?,?);
                        ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseName->courseId);
		$sqlQuery->set($courseName->courseName);
                $sqlQuery->set($courseName->inicio);
                $sqlQuery->set($courseName->fin);
                $sqlQuery->set($courseName->inicio_inscripcion);
                $sqlQuery->set($courseName->fin_inscripcion);                
		$id = $this->executeInsert($sqlQuery);	
		$courseName->id = $id;
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
		$courseName = new CourseName();
		$courseName->id = $row['id'];
		$courseName->courseId = $row['course_id'];
		$courseName->courseName = $row['course_name'];
                $courseName->fin = $row['fin'];
                $courseName->inicio = $row['inicio'];
                $courseName->inicioInscripcion = $row['inicio_inscripcion'];
                $courseName->finInscripcion = $row['fin_inscripcion'];
                
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