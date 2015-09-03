<?php
/**
 * Class that operate on table 'embargo_restrictedcourse'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoRestrictedcourseMySqlDAO implements EmbargoRestrictedcourseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoRestrictedcourseMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_restrictedcourse WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_restrictedcourse';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_restrictedcourse ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoRestrictedcourse primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_restrictedcourse WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoRestrictedcourseMySql embargoRestrictedcourse
 	 */
	public function insert($embargoRestrictedcourse){
		$sql = 'INSERT INTO embargo_restrictedcourse (course_key, enroll_msg_key, access_msg_key) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoRestrictedcourse->courseKey);
		$sqlQuery->set($embargoRestrictedcourse->enrollMsgKey);
		$sqlQuery->set($embargoRestrictedcourse->accessMsgKey);

		$id = $this->executeInsert($sqlQuery);	
		$embargoRestrictedcourse->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoRestrictedcourseMySql embargoRestrictedcourse
 	 */
	public function update($embargoRestrictedcourse){
		$sql = 'UPDATE embargo_restrictedcourse SET course_key = ?, enroll_msg_key = ?, access_msg_key = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoRestrictedcourse->courseKey);
		$sqlQuery->set($embargoRestrictedcourse->enrollMsgKey);
		$sqlQuery->set($embargoRestrictedcourse->accessMsgKey);

		$sqlQuery->setNumber($embargoRestrictedcourse->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_restrictedcourse';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseKey($value){
		$sql = 'SELECT * FROM embargo_restrictedcourse WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnrollMsgKey($value){
		$sql = 'SELECT * FROM embargo_restrictedcourse WHERE enroll_msg_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccessMsgKey($value){
		$sql = 'SELECT * FROM embargo_restrictedcourse WHERE access_msg_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseKey($value){
		$sql = 'DELETE FROM embargo_restrictedcourse WHERE course_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnrollMsgKey($value){
		$sql = 'DELETE FROM embargo_restrictedcourse WHERE enroll_msg_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccessMsgKey($value){
		$sql = 'DELETE FROM embargo_restrictedcourse WHERE access_msg_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoRestrictedcourseMySql 
	 */
	protected function readRow($row){
		$embargoRestrictedcourse = new EmbargoRestrictedcourse();
		
		$embargoRestrictedcourse->id = $row['id'];
		$embargoRestrictedcourse->courseKey = $row['course_key'];
		$embargoRestrictedcourse->enrollMsgKey = $row['enroll_msg_key'];
		$embargoRestrictedcourse->accessMsgKey = $row['access_msg_key'];

		return $embargoRestrictedcourse;
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
	 * @return EmbargoRestrictedcourseMySql 
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