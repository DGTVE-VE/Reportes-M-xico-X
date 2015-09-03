<?php
/**
 * Class that operate on table 'courseware_offlinecomputedgrade'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareOfflinecomputedgradeMySqlDAO implements CoursewareOfflinecomputedgradeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareOfflinecomputedgradeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareOfflinecomputedgrade primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareOfflinecomputedgradeMySql coursewareOfflinecomputedgrade
 	 */
	public function insert($coursewareOfflinecomputedgrade){
		$sql = 'INSERT INTO courseware_offlinecomputedgrade (user_id, course_id, created, updated, gradeset) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($coursewareOfflinecomputedgrade->userId);
		$sqlQuery->set($coursewareOfflinecomputedgrade->courseId);
		$sqlQuery->set($coursewareOfflinecomputedgrade->created);
		$sqlQuery->set($coursewareOfflinecomputedgrade->updated);
		$sqlQuery->set($coursewareOfflinecomputedgrade->gradeset);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareOfflinecomputedgrade->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareOfflinecomputedgradeMySql coursewareOfflinecomputedgrade
 	 */
	public function update($coursewareOfflinecomputedgrade){
		$sql = 'UPDATE courseware_offlinecomputedgrade SET user_id = ?, course_id = ?, created = ?, updated = ?, gradeset = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($coursewareOfflinecomputedgrade->userId);
		$sqlQuery->set($coursewareOfflinecomputedgrade->courseId);
		$sqlQuery->set($coursewareOfflinecomputedgrade->created);
		$sqlQuery->set($coursewareOfflinecomputedgrade->updated);
		$sqlQuery->set($coursewareOfflinecomputedgrade->gradeset);

		$sqlQuery->setNumber($coursewareOfflinecomputedgrade->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdated($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGradeset($value){
		$sql = 'SELECT * FROM courseware_offlinecomputedgrade WHERE gradeset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdated($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGradeset($value){
		$sql = 'DELETE FROM courseware_offlinecomputedgrade WHERE gradeset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareOfflinecomputedgradeMySql 
	 */
	protected function readRow($row){
		$coursewareOfflinecomputedgrade = new CoursewareOfflinecomputedgrade();
		
		$coursewareOfflinecomputedgrade->id = $row['id'];
		$coursewareOfflinecomputedgrade->userId = $row['user_id'];
		$coursewareOfflinecomputedgrade->courseId = $row['course_id'];
		$coursewareOfflinecomputedgrade->created = $row['created'];
		$coursewareOfflinecomputedgrade->updated = $row['updated'];
		$coursewareOfflinecomputedgrade->gradeset = $row['gradeset'];

		return $coursewareOfflinecomputedgrade;
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
	 * @return CoursewareOfflinecomputedgradeMySql 
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