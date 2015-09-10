<?php
/**
 * Class that operate on table 'courseware_studentmodule'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareStudentmoduleMySqlDAO implements CoursewareStudentmoduleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareStudentmoduleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_studentmodule';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_studentmodule ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareStudentmodule primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_studentmodule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareStudentmoduleMySql coursewareStudentmodule
 	 */
	public function insert($coursewareStudentmodule){
		$sql = 'INSERT INTO courseware_studentmodule (module_type, module_id, student_id, state, grade, created, modified, max_grade, done, course_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareStudentmodule->moduleType);
		$sqlQuery->set($coursewareStudentmodule->moduleId);
		$sqlQuery->setNumber($coursewareStudentmodule->studentId);
		$sqlQuery->set($coursewareStudentmodule->state);
		$sqlQuery->set($coursewareStudentmodule->grade);
		$sqlQuery->set($coursewareStudentmodule->created);
		$sqlQuery->set($coursewareStudentmodule->modified);
		$sqlQuery->set($coursewareStudentmodule->maxGrade);
		$sqlQuery->set($coursewareStudentmodule->done);
		$sqlQuery->set($coursewareStudentmodule->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareStudentmodule->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareStudentmoduleMySql coursewareStudentmodule
 	 */
	public function update($coursewareStudentmodule){
		$sql = 'UPDATE courseware_studentmodule SET module_type = ?, module_id = ?, student_id = ?, state = ?, grade = ?, created = ?, modified = ?, max_grade = ?, done = ?, course_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareStudentmodule->moduleType);
		$sqlQuery->set($coursewareStudentmodule->moduleId);
		$sqlQuery->setNumber($coursewareStudentmodule->studentId);
		$sqlQuery->set($coursewareStudentmodule->state);
		$sqlQuery->set($coursewareStudentmodule->grade);
		$sqlQuery->set($coursewareStudentmodule->created);
		$sqlQuery->set($coursewareStudentmodule->modified);
		$sqlQuery->set($coursewareStudentmodule->maxGrade);
		$sqlQuery->set($coursewareStudentmodule->done);
		$sqlQuery->set($coursewareStudentmodule->courseId);

		$sqlQuery->setNumber($coursewareStudentmodule->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_studentmodule';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByModuleType($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE module_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModuleId($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE module_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGrade($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMaxGrade($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE max_grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDone($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM courseware_studentmodule WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByModuleType($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE module_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModuleId($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE module_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentId($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGrade($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMaxGrade($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE max_grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDone($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM courseware_studentmodule WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareStudentmoduleMySql 
	 */
	protected function readRow($row){
		$coursewareStudentmodule = new CoursewareStudentmodule();
		
		$coursewareStudentmodule->id = $row['id'];
		$coursewareStudentmodule->moduleType = $row['module_type'];
		$coursewareStudentmodule->moduleId = $row['module_id'];
		$coursewareStudentmodule->studentId = $row['student_id'];
		$coursewareStudentmodule->state = $row['state'];
		$coursewareStudentmodule->grade = $row['grade'];
		$coursewareStudentmodule->created = $row['created'];
		$coursewareStudentmodule->modified = $row['modified'];
		$coursewareStudentmodule->maxGrade = $row['max_grade'];
		$coursewareStudentmodule->done = $row['done'];
		$coursewareStudentmodule->courseId = $row['course_id'];

		return $coursewareStudentmodule;
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
	 * @return CoursewareStudentmoduleMySql 
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