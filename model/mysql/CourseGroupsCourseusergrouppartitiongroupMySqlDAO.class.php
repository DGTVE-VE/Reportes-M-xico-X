<?php
/**
 * Class that operate on table 'course_groups_courseusergrouppartitiongroup'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseGroupsCourseusergrouppartitiongroupMySqlDAO implements CourseGroupsCourseusergrouppartitiongroupDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseGroupsCourseusergrouppartitiongroupMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseGroupsCourseusergrouppartitiongroup primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseGroupsCourseusergrouppartitiongroupMySql courseGroupsCourseusergrouppartitiongroup
 	 */
	public function insert($courseGroupsCourseusergrouppartitiongroup){
		$sql = 'INSERT INTO course_groups_courseusergrouppartitiongroup (course_user_group_id, partition_id, group_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->courseUserGroupId);
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->partitionId);
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->groupId);
		$sqlQuery->set($courseGroupsCourseusergrouppartitiongroup->createdAt);
		$sqlQuery->set($courseGroupsCourseusergrouppartitiongroup->updatedAt);

		$id = $this->executeInsert($sqlQuery);	
		$courseGroupsCourseusergrouppartitiongroup->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseGroupsCourseusergrouppartitiongroupMySql courseGroupsCourseusergrouppartitiongroup
 	 */
	public function update($courseGroupsCourseusergrouppartitiongroup){
		$sql = 'UPDATE course_groups_courseusergrouppartitiongroup SET course_user_group_id = ?, partition_id = ?, group_id = ?, created_at = ?, updated_at = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->courseUserGroupId);
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->partitionId);
		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->groupId);
		$sqlQuery->set($courseGroupsCourseusergrouppartitiongroup->createdAt);
		$sqlQuery->set($courseGroupsCourseusergrouppartitiongroup->updatedAt);

		$sqlQuery->setNumber($courseGroupsCourseusergrouppartitiongroup->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseUserGroupId($value){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE course_user_group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPartitionId($value){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE partition_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGroupId($value){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdatedAt($value){
		$sql = 'SELECT * FROM course_groups_courseusergrouppartitiongroup WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseUserGroupId($value){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE course_user_group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPartitionId($value){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE partition_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGroupId($value){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE group_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdatedAt($value){
		$sql = 'DELETE FROM course_groups_courseusergrouppartitiongroup WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseGroupsCourseusergrouppartitiongroupMySql 
	 */
	protected function readRow($row){
		$courseGroupsCourseusergrouppartitiongroup = new CourseGroupsCourseusergrouppartitiongroup();
		
		$courseGroupsCourseusergrouppartitiongroup->id = $row['id'];
		$courseGroupsCourseusergrouppartitiongroup->courseUserGroupId = $row['course_user_group_id'];
		$courseGroupsCourseusergrouppartitiongroup->partitionId = $row['partition_id'];
		$courseGroupsCourseusergrouppartitiongroup->groupId = $row['group_id'];
		$courseGroupsCourseusergrouppartitiongroup->createdAt = $row['created_at'];
		$courseGroupsCourseusergrouppartitiongroup->updatedAt = $row['updated_at'];

		return $courseGroupsCourseusergrouppartitiongroup;
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
	 * @return CourseGroupsCourseusergrouppartitiongroupMySql 
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