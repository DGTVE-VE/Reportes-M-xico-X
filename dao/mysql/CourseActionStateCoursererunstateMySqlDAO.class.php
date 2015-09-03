<?php
/**
 * Class that operate on table 'course_action_state_coursererunstate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseActionStateCoursererunstateMySqlDAO implements CourseActionStateCoursererunstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseActionStateCoursererunstateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_action_state_coursererunstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_action_state_coursererunstate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseActionStateCoursererunstate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseActionStateCoursererunstateMySql courseActionStateCoursererunstate
 	 */
	public function insert($courseActionStateCoursererunstate){
		$sql = 'INSERT INTO course_action_state_coursererunstate (created_time, updated_time, created_user_id, updated_user_id, course_key, action, state, should_display, message, source_course_key, display_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseActionStateCoursererunstate->createdTime);
		$sqlQuery->set($courseActionStateCoursererunstate->updatedTime);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->createdUserId);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->updatedUserId);
		$sqlQuery->set($courseActionStateCoursererunstate->courseKey);
		$sqlQuery->set($courseActionStateCoursererunstate->action);
		$sqlQuery->set($courseActionStateCoursererunstate->state);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->shouldDisplay);
		$sqlQuery->set($courseActionStateCoursererunstate->message);
		$sqlQuery->set($courseActionStateCoursererunstate->sourceCourseKey);
		$sqlQuery->set($courseActionStateCoursererunstate->displayName);

		$id = $this->executeInsert($sqlQuery);	
		$courseActionStateCoursererunstate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseActionStateCoursererunstateMySql courseActionStateCoursererunstate
 	 */
	public function update($courseActionStateCoursererunstate){
		$sql = 'UPDATE course_action_state_coursererunstate SET created_time = ?, updated_time = ?, created_user_id = ?, updated_user_id = ?, course_key = ?, action = ?, state = ?, should_display = ?, message = ?, source_course_key = ?, display_name = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseActionStateCoursererunstate->createdTime);
		$sqlQuery->set($courseActionStateCoursererunstate->updatedTime);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->createdUserId);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->updatedUserId);
		$sqlQuery->set($courseActionStateCoursererunstate->courseKey);
		$sqlQuery->set($courseActionStateCoursererunstate->action);
		$sqlQuery->set($courseActionStateCoursererunstate->state);
		$sqlQuery->setNumber($courseActionStateCoursererunstate->shouldDisplay);
		$sqlQuery->set($courseActionStateCoursererunstate->message);
		$sqlQuery->set($courseActionStateCoursererunstate->sourceCourseKey);
		$sqlQuery->set($courseActionStateCoursererunstate->displayName);

		$sqlQuery->setNumber($courseActionStateCoursererunstate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_action_state_coursererunstate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreatedTime($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE created_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdatedTime($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE updated_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedUserId($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE created_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdatedUserId($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE updated_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseKey($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAction($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE action = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByShouldDisplay($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE should_display = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMessage($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySourceCourseKey($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE source_course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisplayName($value){
		$sql = 'SELECT * FROM course_action_state_coursererunstate WHERE display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreatedTime($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE created_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdatedTime($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE updated_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedUserId($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE created_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdatedUserId($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE updated_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseKey($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAction($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE action = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByShouldDisplay($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE should_display = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMessage($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySourceCourseKey($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE source_course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisplayName($value){
		$sql = 'DELETE FROM course_action_state_coursererunstate WHERE display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseActionStateCoursererunstateMySql 
	 */
	protected function readRow($row){
		$courseActionStateCoursererunstate = new CourseActionStateCoursererunstate();
		
		$courseActionStateCoursererunstate->id = $row['id'];
		$courseActionStateCoursererunstate->createdTime = $row['created_time'];
		$courseActionStateCoursererunstate->updatedTime = $row['updated_time'];
		$courseActionStateCoursererunstate->createdUserId = $row['created_user_id'];
		$courseActionStateCoursererunstate->updatedUserId = $row['updated_user_id'];
		$courseActionStateCoursererunstate->courseKey = $row['course_key'];
		$courseActionStateCoursererunstate->action = $row['action'];
		$courseActionStateCoursererunstate->state = $row['state'];
		$courseActionStateCoursererunstate->shouldDisplay = $row['should_display'];
		$courseActionStateCoursererunstate->message = $row['message'];
		$courseActionStateCoursererunstate->sourceCourseKey = $row['source_course_key'];
		$courseActionStateCoursererunstate->displayName = $row['display_name'];

		return $courseActionStateCoursererunstate;
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
	 * @return CourseActionStateCoursererunstateMySql 
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