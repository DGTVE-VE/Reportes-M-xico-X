<?php
/**
 * Class that operate on table 'courseware_offlinecomputedgradelog'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareOfflinecomputedgradelogMySqlDAO implements CoursewareOfflinecomputedgradelogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareOfflinecomputedgradelogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareOfflinecomputedgradelog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareOfflinecomputedgradelogMySql coursewareOfflinecomputedgradelog
 	 */
	public function insert($coursewareOfflinecomputedgradelog){
		$sql = 'INSERT INTO courseware_offlinecomputedgradelog (course_id, created, seconds, nstudents) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareOfflinecomputedgradelog->courseId);
		$sqlQuery->set($coursewareOfflinecomputedgradelog->created);
		$sqlQuery->setNumber($coursewareOfflinecomputedgradelog->seconds);
		$sqlQuery->setNumber($coursewareOfflinecomputedgradelog->nstudents);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareOfflinecomputedgradelog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareOfflinecomputedgradelogMySql coursewareOfflinecomputedgradelog
 	 */
	public function update($coursewareOfflinecomputedgradelog){
		$sql = 'UPDATE courseware_offlinecomputedgradelog SET course_id = ?, created = ?, seconds = ?, nstudents = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareOfflinecomputedgradelog->courseId);
		$sqlQuery->set($coursewareOfflinecomputedgradelog->created);
		$sqlQuery->setNumber($coursewareOfflinecomputedgradelog->seconds);
		$sqlQuery->setNumber($coursewareOfflinecomputedgradelog->nstudents);

		$sqlQuery->setNumber($coursewareOfflinecomputedgradelog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySeconds($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog WHERE seconds = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNstudents($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgradelog WHERE nstudents = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySeconds($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog WHERE seconds = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNstudents($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgradelog WHERE nstudents = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareOfflinecomputedgradelogMySql 
	 */
	protected function readRow($row){
		$coursewareOfflinecomputedgradelog = new CoursewareOfflinecomputedgradelog();
		
		$coursewareOfflinecomputedgradelog->id = $row['id'];
		$coursewareOfflinecomputedgradelog->courseId = $row['course_id'];
		$coursewareOfflinecomputedgradelog->created = $row['created'];
		$coursewareOfflinecomputedgradelog->seconds = $row['seconds'];
		$coursewareOfflinecomputedgradelog->nstudents = $row['nstudents'];

		return $coursewareOfflinecomputedgradelog;
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
	 * @return CoursewareOfflinecomputedgradelogMySql 
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