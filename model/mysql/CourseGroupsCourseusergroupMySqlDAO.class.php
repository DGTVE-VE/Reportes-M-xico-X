<?php
/**
 * Class that operate on table 'course_groups_courseusergroup'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseGroupsCourseusergroupMySqlDAO implements CourseGroupsCourseusergroupDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseGroupsCourseusergroupMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_groups_courseusergroup WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_groups_courseusergroup';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_groups_courseusergroup ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseGroupsCourseusergroup primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_groups_courseusergroup WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergroupMySql courseGroupsCourseusergroup
 	 */
	public function insert($courseGroupsCourseusergroup){
		$sql = 'INSERT INTO course_groups_courseusergroup (name, course_id, group_type) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseGroupsCourseusergroup->name);
		$sqlQuery->set($courseGroupsCourseusergroup->courseId);
		$sqlQuery->set($courseGroupsCourseusergroup->groupType);

		$id = $this->executeInsert($sqlQuery);	
		$courseGroupsCourseusergroup->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergroupMySql courseGroupsCourseusergroup
 	 */
	public function update($courseGroupsCourseusergroup){
		$sql = 'UPDATE course_groups_courseusergroup SET name = ?, course_id = ?, group_type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseGroupsCourseusergroup->name);
		$sqlQuery->set($courseGroupsCourseusergroup->courseId);
		$sqlQuery->set($courseGroupsCourseusergroup->groupType);

		$sqlQuery->setNumber($courseGroupsCourseusergroup->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_groups_courseusergroup';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM course_groups_courseusergroup WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM course_groups_courseusergroup WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGroupType($value){
		$sql = 'SELECT * FROM course_groups_courseusergroup WHERE group_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM course_groups_courseusergroup WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM course_groups_courseusergroup WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGroupType($value){
		$sql = 'DELETE FROM course_groups_courseusergroup WHERE group_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseGroupsCourseusergroupMySql 
	 */
	protected function readRow($row){
		$courseGroupsCourseusergroup = new CourseGroupsCourseusergroup();
		
		$courseGroupsCourseusergroup->id = $row['id'];
		$courseGroupsCourseusergroup->name = $row['name'];
		$courseGroupsCourseusergroup->courseId = $row['course_id'];
		$courseGroupsCourseusergroup->groupType = $row['group_type'];

		return $courseGroupsCourseusergroup;
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
	 * @return CourseGroupsCourseusergroupMySql 
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