<?php
/**
 * Class that operate on table 'milestones_milestonerelationshiptype'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class MilestonesMilestonerelationshiptypeMySqlDAO implements MilestonesMilestonerelationshiptypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MilestonesMilestonerelationshiptypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param milestonesMilestonerelationshiptype primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesMilestonerelationshiptypeMySql milestonesMilestonerelationshiptype
 	 */
	public function insert($milestonesMilestonerelationshiptype){
		$sql = 'INSERT INTO milestones_milestonerelationshiptype (created, modified, name, description, active) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesMilestonerelationshiptype->created);
		$sqlQuery->set($milestonesMilestonerelationshiptype->modified);
		$sqlQuery->set($milestonesMilestonerelationshiptype->name);
		$sqlQuery->set($milestonesMilestonerelationshiptype->description);
		$sqlQuery->setNumber($milestonesMilestonerelationshiptype->active);

		$id = $this->executeInsert($sqlQuery);	
		$milestonesMilestonerelationshiptype->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesMilestonerelationshiptypeMySql milestonesMilestonerelationshiptype
 	 */
	public function update($milestonesMilestonerelationshiptype){
		$sql = 'UPDATE milestones_milestonerelationshiptype SET created = ?, modified = ?, name = ?, description = ?, active = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($milestonesMilestonerelationshiptype->created);
		$sqlQuery->set($milestonesMilestonerelationshiptype->modified);
		$sqlQuery->set($milestonesMilestonerelationshiptype->name);
		$sqlQuery->set($milestonesMilestonerelationshiptype->description);
		$sqlQuery->setNumber($milestonesMilestonerelationshiptype->active);

		$sqlQuery->setNumber($milestonesMilestonerelationshiptype->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByActive($value){
		$sql = 'SELECT * FROM milestones_milestonerelationshiptype WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByActive($value){
		$sql = 'DELETE FROM milestones_milestonerelationshiptype WHERE active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MilestonesMilestonerelationshiptypeMySql 
	 */
	protected function readRow($row){
		$milestonesMilestonerelationshiptype = new MilestonesMilestonerelationshiptype();
		
		$milestonesMilestonerelationshiptype->id = $row['id'];
		$milestonesMilestonerelationshiptype->created = $row['created'];
		$milestonesMilestonerelationshiptype->modified = $row['modified'];
		$milestonesMilestonerelationshiptype->name = $row['name'];
		$milestonesMilestonerelationshiptype->description = $row['description'];
		$milestonesMilestonerelationshiptype->active = $row['active'];

		return $milestonesMilestonerelationshiptype;
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
	 * @return MilestonesMilestonerelationshiptypeMySql 
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