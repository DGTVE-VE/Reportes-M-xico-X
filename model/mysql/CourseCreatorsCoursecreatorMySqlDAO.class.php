<?php
/**
 * Class that operate on table 'course_creators_coursecreator'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseCreatorsCoursecreatorMySqlDAO implements CourseCreatorsCoursecreatorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseCreatorsCoursecreatorMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_creators_coursecreator WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_creators_coursecreator';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_creators_coursecreator ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseCreatorsCoursecreator primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_creators_coursecreator WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseCreatorsCoursecreatorMySql courseCreatorsCoursecreator
 	 */
	public function insert($courseCreatorsCoursecreator){
		$sql = 'INSERT INTO course_creators_coursecreator (user_id, state_changed, state, note) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseCreatorsCoursecreator->userId);
		$sqlQuery->set($courseCreatorsCoursecreator->stateChanged);
		$sqlQuery->set($courseCreatorsCoursecreator->state);
		$sqlQuery->set($courseCreatorsCoursecreator->note);

		$id = $this->executeInsert($sqlQuery);	
		$courseCreatorsCoursecreator->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseCreatorsCoursecreatorMySql courseCreatorsCoursecreator
 	 */
	public function update($courseCreatorsCoursecreator){
		$sql = 'UPDATE course_creators_coursecreator SET user_id = ?, state_changed = ?, state = ?, note = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseCreatorsCoursecreator->userId);
		$sqlQuery->set($courseCreatorsCoursecreator->stateChanged);
		$sqlQuery->set($courseCreatorsCoursecreator->state);
		$sqlQuery->set($courseCreatorsCoursecreator->note);

		$sqlQuery->setNumber($courseCreatorsCoursecreator->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_creators_coursecreator';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM course_creators_coursecreator WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStateChanged($value){
		$sql = 'SELECT * FROM course_creators_coursecreator WHERE state_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM course_creators_coursecreator WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNote($value){
		$sql = 'SELECT * FROM course_creators_coursecreator WHERE note = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM course_creators_coursecreator WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStateChanged($value){
		$sql = 'DELETE FROM course_creators_coursecreator WHERE state_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM course_creators_coursecreator WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNote($value){
		$sql = 'DELETE FROM course_creators_coursecreator WHERE note = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseCreatorsCoursecreatorMySql 
	 */
	protected function readRow($row){
		$courseCreatorsCoursecreator = new CourseCreatorsCoursecreator();
		
		$courseCreatorsCoursecreator->id = $row['id'];
		$courseCreatorsCoursecreator->userId = $row['user_id'];
		$courseCreatorsCoursecreator->stateChanged = $row['state_changed'];
		$courseCreatorsCoursecreator->state = $row['state'];
		$courseCreatorsCoursecreator->note = $row['note'];

		return $courseCreatorsCoursecreator;
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
	 * @return CourseCreatorsCoursecreatorMySql 
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