<?php
/**
 * Class that operate on table 'instructor_task_instructortask'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class InstructorTaskInstructortaskMySqlDAO implements InstructorTaskInstructortaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return InstructorTaskInstructortaskMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM instructor_task_instructortask';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM instructor_task_instructortask ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param instructorTaskInstructortask primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param InstructorTaskInstructortaskMySql instructorTaskInstructortask
 	 */
	public function insert($instructorTaskInstructortask){
		$sql = 'INSERT INTO instructor_task_instructortask (task_type, course_id, task_key, task_input, task_id, task_state, task_output, requester_id, created, updated, subtasks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($instructorTaskInstructortask->taskType);
		$sqlQuery->set($instructorTaskInstructortask->courseId);
		$sqlQuery->set($instructorTaskInstructortask->taskKey);
		$sqlQuery->set($instructorTaskInstructortask->taskInput);
		$sqlQuery->set($instructorTaskInstructortask->taskId);
		$sqlQuery->set($instructorTaskInstructortask->taskState);
		$sqlQuery->set($instructorTaskInstructortask->taskOutput);
		$sqlQuery->setNumber($instructorTaskInstructortask->requesterId);
		$sqlQuery->set($instructorTaskInstructortask->created);
		$sqlQuery->set($instructorTaskInstructortask->updated);
		$sqlQuery->set($instructorTaskInstructortask->subtasks);

		$id = $this->executeInsert($sqlQuery);	
		$instructorTaskInstructortask->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param InstructorTaskInstructortaskMySql instructorTaskInstructortask
 	 */
	public function update($instructorTaskInstructortask){
		$sql = 'UPDATE instructor_task_instructortask SET task_type = ?, course_id = ?, task_key = ?, task_input = ?, task_id = ?, task_state = ?, task_output = ?, requester_id = ?, created = ?, updated = ?, subtasks = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($instructorTaskInstructortask->taskType);
		$sqlQuery->set($instructorTaskInstructortask->courseId);
		$sqlQuery->set($instructorTaskInstructortask->taskKey);
		$sqlQuery->set($instructorTaskInstructortask->taskInput);
		$sqlQuery->set($instructorTaskInstructortask->taskId);
		$sqlQuery->set($instructorTaskInstructortask->taskState);
		$sqlQuery->set($instructorTaskInstructortask->taskOutput);
		$sqlQuery->setNumber($instructorTaskInstructortask->requesterId);
		$sqlQuery->set($instructorTaskInstructortask->created);
		$sqlQuery->set($instructorTaskInstructortask->updated);
		$sqlQuery->set($instructorTaskInstructortask->subtasks);

		$sqlQuery->setNumber($instructorTaskInstructortask->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM instructor_task_instructortask';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaskType($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskKey($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskInput($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_input = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskId($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskState($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTaskOutput($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE task_output = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRequesterId($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE requester_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdated($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubtasks($value){
		$sql = 'SELECT * FROM instructor_task_instructortask WHERE subtasks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaskType($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskKey($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskInput($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_input = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskId($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskState($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTaskOutput($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE task_output = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRequesterId($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE requester_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdated($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubtasks($value){
		$sql = 'DELETE FROM instructor_task_instructortask WHERE subtasks = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return InstructorTaskInstructortaskMySql 
	 */
	protected function readRow($row){
		$instructorTaskInstructortask = new InstructorTaskInstructortask();
		
		$instructorTaskInstructortask->id = $row['id'];
		$instructorTaskInstructortask->taskType = $row['task_type'];
		$instructorTaskInstructortask->courseId = $row['course_id'];
		$instructorTaskInstructortask->taskKey = $row['task_key'];
		$instructorTaskInstructortask->taskInput = $row['task_input'];
		$instructorTaskInstructortask->taskId = $row['task_id'];
		$instructorTaskInstructortask->taskState = $row['task_state'];
		$instructorTaskInstructortask->taskOutput = $row['task_output'];
		$instructorTaskInstructortask->requesterId = $row['requester_id'];
		$instructorTaskInstructortask->created = $row['created'];
		$instructorTaskInstructortask->updated = $row['updated'];
		$instructorTaskInstructortask->subtasks = $row['subtasks'];

		return $instructorTaskInstructortask;
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
	 * @return InstructorTaskInstructortaskMySql 
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