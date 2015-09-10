<?php
/**
 * Class that operate on table 'milestones_coursecontentmilestone'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class MilestonesCoursecontentmilestoneMySqlDAO implements MilestonesCoursecontentmilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MilestonesCoursecontentmilestoneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param milestonesCoursecontentmilestone primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesCoursecontentmilestoneMySql milestonesCoursecontentmilestone
 	 */
	public function insert($milestonesCoursecontentmilestone){
		$sql = 'INSERT INTO milestones_coursecontentmilestone (created, modified, course_id, content_id, milestone_id, milestone_relationship_type_id, active) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesCoursecontentmilestone->created);
		$sqlQuery->set($milestonesCoursecontentmilestone->modified);
		$sqlQuery->set($milestonesCoursecontentmilestone->courseId);
		$sqlQuery->set($milestonesCoursecontentmilestone->contentId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->milestoneId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->milestoneRelationshipTypeId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->active);

		$id = $this->executeInsert($sqlQuery);	
		$milestonesCoursecontentmilestone->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesCoursecontentmilestoneMySql milestonesCoursecontentmilestone
 	 */
	public function update($milestonesCoursecontentmilestone){
		$sql = 'UPDATE milestones_coursecontentmilestone SET created = ?, modified = ?, course_id = ?, content_id = ?, milestone_id = ?, milestone_relationship_type_id = ?, active = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesCoursecontentmilestone->created);
		$sqlQuery->set($milestonesCoursecontentmilestone->modified);
		$sqlQuery->set($milestonesCoursecontentmilestone->courseId);
		$sqlQuery->set($milestonesCoursecontentmilestone->contentId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->milestoneId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->milestoneRelationshipTypeId);
		$sqlQuery->setNumber($milestonesCoursecontentmilestone->active);

		$sqlQuery->setNumber($milestonesCoursecontentmilestone->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM milestones_coursecontentmilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContentId($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE content_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMilestoneId($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMilestoneRelationshipTypeId($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE milestone_relationship_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM milestones_coursecontentmilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContentId($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE content_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMilestoneId($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMilestoneRelationshipTypeId($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE milestone_relationship_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM milestones_coursecontentmilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MilestonesCoursecontentmilestoneMySql 
	 */
	protected function readRow($row){
		$milestonesCoursecontentmilestone = new MilestonesCoursecontentmilestone();
		
		$milestonesCoursecontentmilestone->id = $row['id'];
		$milestonesCoursecontentmilestone->created = $row['created'];
		$milestonesCoursecontentmilestone->modified = $row['modified'];
		$milestonesCoursecontentmilestone->courseId = $row['course_id'];
		$milestonesCoursecontentmilestone->contentId = $row['content_id'];
		$milestonesCoursecontentmilestone->milestoneId = $row['milestone_id'];
		$milestonesCoursecontentmilestone->milestoneRelationshipTypeId = $row['milestone_relationship_type_id'];
		$milestonesCoursecontentmilestone->active = $row['active'];

		return $milestonesCoursecontentmilestone;
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
	 * @return MilestonesCoursecontentmilestoneMySql 
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