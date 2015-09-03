<?php
/**
 * Class that operate on table 'milestones_usermilestone'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class MilestonesUsermilestoneMySqlDAO implements MilestonesUsermilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MilestonesUsermilestoneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM milestones_usermilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM milestones_usermilestone ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param milestonesUsermilestone primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM milestones_usermilestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesUsermilestoneMySql milestonesUsermilestone
 	 */
	public function insert($milestonesUsermilestone){
		$sql = 'INSERT INTO milestones_usermilestone (created, modified, user_id, milestone_id, source, collected, active) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesUsermilestone->created);
		$sqlQuery->set($milestonesUsermilestone->modified);
		$sqlQuery->setNumber($milestonesUsermilestone->userId);
		$sqlQuery->setNumber($milestonesUsermilestone->milestoneId);
		$sqlQuery->set($milestonesUsermilestone->source);
		$sqlQuery->set($milestonesUsermilestone->collected);
		$sqlQuery->setNumber($milestonesUsermilestone->active);

		$id = $this->executeInsert($sqlQuery);	
		$milestonesUsermilestone->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesUsermilestoneMySql milestonesUsermilestone
 	 */
	public function update($milestonesUsermilestone){
		$sql = 'UPDATE milestones_usermilestone SET created = ?, modified = ?, user_id = ?, milestone_id = ?, source = ?, collected = ?, active = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesUsermilestone->created);
		$sqlQuery->set($milestonesUsermilestone->modified);
		$sqlQuery->setNumber($milestonesUsermilestone->userId);
		$sqlQuery->setNumber($milestonesUsermilestone->milestoneId);
		$sqlQuery->set($milestonesUsermilestone->source);
		$sqlQuery->set($milestonesUsermilestone->collected);
		$sqlQuery->setNumber($milestonesUsermilestone->active);

		$sqlQuery->setNumber($milestonesUsermilestone->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM milestones_usermilestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMilestoneId($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySource($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCollected($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE collected = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM milestones_usermilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMilestoneId($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE milestone_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySource($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCollected($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE collected = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM milestones_usermilestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MilestonesUsermilestoneMySql 
	 */
	protected function readRow($row){
		$milestonesUsermilestone = new MilestonesUsermilestone();
		
		$milestonesUsermilestone->id = $row['id'];
		$milestonesUsermilestone->created = $row['created'];
		$milestonesUsermilestone->modified = $row['modified'];
		$milestonesUsermilestone->userId = $row['user_id'];
		$milestonesUsermilestone->milestoneId = $row['milestone_id'];
		$milestonesUsermilestone->source = $row['source'];
		$milestonesUsermilestone->collected = $row['collected'];
		$milestonesUsermilestone->active = $row['active'];

		return $milestonesUsermilestone;
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
	 * @return MilestonesUsermilestoneMySql 
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