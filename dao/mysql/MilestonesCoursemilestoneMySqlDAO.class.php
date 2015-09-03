<?php
/**
 * Class that operate on table 'milestones_coursemilestone'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class MilestonesCoursemilestoneMySqlDAO implements MilestonesCoursemilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MilestonesCoursemilestoneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM milestones_coursemilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM milestones_coursemilestone ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param milestonesCoursemilestone primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesCoursemilestoneMySql milestonesCoursemilestone
 	 */
	public function insert($milestonesCoursemilestone){
		$sql = 'INSERT INTO milestones_coursemilestone (created, modified, course_id, milestone_id, milestone_relationship_type_id, active) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesCoursemilestone->created);
		$sqlQuery->set($milestonesCoursemilestone->modified);
		$sqlQuery->set($milestonesCoursemilestone->courseId);
		$sqlQuery->setNumber($milestonesCoursemilestone->milestoneId);
		$sqlQuery->setNumber($milestonesCoursemilestone->milestoneRelationshipTypeId);
		$sqlQuery->setNumber($milestonesCoursemilestone->active);

		$id = $this->executeInsert($sqlQuery);	
		$milestonesCoursemilestone->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesCoursemilestoneMySql milestonesCoursemilestone
 	 */
	public function update($milestonesCoursemilestone){
		$sql = 'UPDATE milestones_coursemilestone SET created = ?, modified = ?, course_id = ?, milestone_id = ?, milestone_relationship_type_id = ?, active = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesCoursemilestone->created);
		$sqlQuery->set($milestonesCoursemilestone->modified);
		$sqlQuery->set($milestonesCoursemilestone->courseId);
		$sqlQuery->setNumber($milestonesCoursemilestone->milestoneId);
		$sqlQuery->setNumber($milestonesCoursemilestone->milestoneRelationshipTypeId);
		$sqlQuery->setNumber($milestonesCoursemilestone->active);

		$sqlQuery->setNumber($milestonesCoursemilestone->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM milestones_coursemilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMilestoneId($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMilestoneRelationshipTypeId($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE milestone_relationship_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM milestones_coursemilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMilestoneId($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMilestoneRelationshipTypeId($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE milestone_relationship_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM milestones_coursemilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MilestonesCoursemilestoneMySql 
	 */
	protected function readRow($row){
		$milestonesCoursemilestone = new MilestonesCoursemilestone();
		
		$milestonesCoursemilestone->id = $row['id'];
		$milestonesCoursemilestone->created = $row['created'];
		$milestonesCoursemilestone->modified = $row['modified'];
		$milestonesCoursemilestone->courseId = $row['course_id'];
		$milestonesCoursemilestone->milestoneId = $row['milestone_id'];
		$milestonesCoursemilestone->milestoneRelationshipTypeId = $row['milestone_relationship_type_id'];
		$milestonesCoursemilestone->active = $row['active'];

		return $milestonesCoursemilestone;
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
	 * @return MilestonesCoursemilestoneMySql 
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