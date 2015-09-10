<?php
/**
 * Class that operate on table 'course_groups_courseusergroup_users'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseGroupsCourseusergroupUsersMySqlDAO implements CourseGroupsCourseusergroupUsersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseGroupsCourseusergroupUsersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_groups_courseusergroup_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_groups_courseusergroup_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_groups_courseusergroup_users ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseGroupsCourseusergroupUser primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_groups_courseusergroup_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergroupUsersMySql courseGroupsCourseusergroupUser
 	 */
	public function insert($courseGroupsCourseusergroupUser){
		$sql = 'INSERT INTO course_groups_courseusergroup_users (courseusergroup_id, user_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseGroupsCourseusergroupUser->courseusergroupId);
		$sqlQuery->setNumber($courseGroupsCourseusergroupUser->userId);

		$id = $this->executeInsert($sqlQuery);	
		$courseGroupsCourseusergroupUser->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergroupUsersMySql courseGroupsCourseusergroupUser
 	 */
	public function update($courseGroupsCourseusergroupUser){
		$sql = 'UPDATE course_groups_courseusergroup_users SET courseusergroup_id = ?, user_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseGroupsCourseusergroupUser->courseusergroupId);
		$sqlQuery->setNumber($courseGroupsCourseusergroupUser->userId);

		$sqlQuery->setNumber($courseGroupsCourseusergroupUser->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_groups_courseusergroup_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseusergroupId($value){
		$sql = 'SELECT * FROM course_groups_courseusergroup_users WHERE courseusergroup_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM course_groups_courseusergroup_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseusergroupId($value){
		$sql = 'DELETE FROM course_groups_courseusergroup_users WHERE courseusergroup_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM course_groups_courseusergroup_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseGroupsCourseusergroupUsersMySql 
	 */
	protected function readRow($row){
		$courseGroupsCourseusergroupUser = new CourseGroupsCourseusergroupUser();
		
		$courseGroupsCourseusergroupUser->id = $row['id'];
		$courseGroupsCourseusergroupUser->courseusergroupId = $row['courseusergroup_id'];
		$courseGroupsCourseusergroupUser->userId = $row['user_id'];

		return $courseGroupsCourseusergroupUser;
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
	 * @return CourseGroupsCourseusergroupUsersMySql 
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