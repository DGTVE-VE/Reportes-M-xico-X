<?php
/**
 * Class that operate on table 'milestones_milestone'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class MilestonesMilestoneMySqlDAO implements MilestonesMilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MilestonesMilestoneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM milestones_milestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM milestones_milestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM milestones_milestone ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param milestonesMilestone primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM milestones_milestone WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesMilestoneMySql milestonesMilestone
 	 */
	public function insert($milestonesMilestone){
		$sql = 'INSERT INTO milestones_milestone (created, modified, namespace, name, display_name, description, active) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesMilestone->created);
		$sqlQuery->set($milestonesMilestone->modified);
		$sqlQuery->set($milestonesMilestone->namespace);
		$sqlQuery->set($milestonesMilestone->name);
		$sqlQuery->set($milestonesMilestone->displayName);
		$sqlQuery->set($milestonesMilestone->description);
		$sqlQuery->setNumber($milestonesMilestone->active);

		$id = $this->executeInsert($sqlQuery);	
		$milestonesMilestone->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesMilestoneMySql milestonesMilestone
 	 */
	public function update($milestonesMilestone){
		$sql = 'UPDATE milestones_milestone SET created = ?, modified = ?, namespace = ?, name = ?, display_name = ?, description = ?, active = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesMilestone->created);
		$sqlQuery->set($milestonesMilestone->modified);
		$sqlQuery->set($milestonesMilestone->namespace);
		$sqlQuery->set($milestonesMilestone->name);
		$sqlQuery->set($milestonesMilestone->displayName);
		$sqlQuery->set($milestonesMilestone->description);
		$sqlQuery->setNumber($milestonesMilestone->active);

		$sqlQuery->setNumber($milestonesMilestone->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM milestones_milestone';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNamespace($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE namespace = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisplayName($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM milestones_milestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM milestones_milestone WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM milestones_milestone WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNamespace($value){
		$sql = 'DELETE FROM milestones_milestone WHERE namespace = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM milestones_milestone WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisplayName($value){
		$sql = 'DELETE FROM milestones_milestone WHERE display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM milestones_milestone WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM milestones_milestone WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MilestonesMilestoneMySql 
	 */
	protected function readRow($row){
		$milestonesMilestone = new MilestonesMilestone();
		
		$milestonesMilestone->id = $row['id'];
		$milestonesMilestone->created = $row['created'];
		$milestonesMilestone->modified = $row['modified'];
		$milestonesMilestone->namespace = $row['namespace'];
		$milestonesMilestone->name = $row['name'];
		$milestonesMilestone->displayName = $row['display_name'];
		$milestonesMilestone->description = $row['description'];
		$milestonesMilestone->active = $row['active'];

		return $milestonesMilestone;
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
	 * @return MilestonesMilestoneMySql 
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