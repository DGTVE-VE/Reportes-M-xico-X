<?php
/**
 * Class that operate on table 'courseware_studentmodulehistory'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareStudentmodulehistoryMySqlDAO implements CoursewareStudentmodulehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareStudentmodulehistoryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_studentmodulehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_studentmodulehistory ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareStudentmodulehistory primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareStudentmodulehistoryMySql coursewareStudentmodulehistory
 	 */
	public function insert($coursewareStudentmodulehistory){
		$sql = 'INSERT INTO courseware_studentmodulehistory (student_module_id, version, created, state, grade, max_grade) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($coursewareStudentmodulehistory->studentModuleId);
		$sqlQuery->set($coursewareStudentmodulehistory->version);
		$sqlQuery->set($coursewareStudentmodulehistory->created);
		$sqlQuery->set($coursewareStudentmodulehistory->state);
		$sqlQuery->set($coursewareStudentmodulehistory->grade);
		$sqlQuery->set($coursewareStudentmodulehistory->maxGrade);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareStudentmodulehistory->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareStudentmodulehistoryMySql coursewareStudentmodulehistory
 	 */
	public function update($coursewareStudentmodulehistory){
		$sql = 'UPDATE courseware_studentmodulehistory SET student_module_id = ?, version = ?, created = ?, state = ?, grade = ?, max_grade = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($coursewareStudentmodulehistory->studentModuleId);
		$sqlQuery->set($coursewareStudentmodulehistory->version);
		$sqlQuery->set($coursewareStudentmodulehistory->created);
		$sqlQuery->set($coursewareStudentmodulehistory->state);
		$sqlQuery->set($coursewareStudentmodulehistory->grade);
		$sqlQuery->set($coursewareStudentmodulehistory->maxGrade);

		$sqlQuery->setNumber($coursewareStudentmodulehistory->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_studentmodulehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentModuleId($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE student_module_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVersion($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE version = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGrade($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMaxGrade($value){
		$sql = 'SELECT * FROM courseware_studentmodulehistory WHERE max_grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentModuleId($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE student_module_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVersion($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE version = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGrade($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMaxGrade($value){
		$sql = 'DELETE FROM courseware_studentmodulehistory WHERE max_grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareStudentmodulehistoryMySql 
	 */
	protected function readRow($row){
		$coursewareStudentmodulehistory = new CoursewareStudentmodulehistory();
		
		$coursewareStudentmodulehistory->id = $row['id'];
		$coursewareStudentmodulehistory->studentModuleId = $row['student_module_id'];
		$coursewareStudentmodulehistory->version = $row['version'];
		$coursewareStudentmodulehistory->created = $row['created'];
		$coursewareStudentmodulehistory->state = $row['state'];
		$coursewareStudentmodulehistory->grade = $row['grade'];
		$coursewareStudentmodulehistory->maxGrade = $row['max_grade'];

		return $coursewareStudentmodulehistory;
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
	 * @return CoursewareStudentmodulehistoryMySql 
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