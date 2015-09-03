<?php
/**
 * Class that operate on table 'bulk_email_courseauthorization'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class BulkEmailCourseauthorizationMySqlDAO implements BulkEmailCourseauthorizationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BulkEmailCourseauthorizationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bulk_email_courseauthorization WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bulk_email_courseauthorization';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bulk_email_courseauthorization ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bulkEmailCourseauthorization primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM bulk_email_courseauthorization WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseauthorizationMySql bulkEmailCourseauthorization
 	 */
	public function insert($bulkEmailCourseauthorization){
		$sql = 'INSERT INTO bulk_email_courseauthorization (course_id, email_enabled) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bulkEmailCourseauthorization->courseId);
		$sqlQuery->setNumber($bulkEmailCourseauthorization->emailEnabled);

		$id = $this->executeInsert($sqlQuery);	
		$bulkEmailCourseauthorization->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseauthorizationMySql bulkEmailCourseauthorization
 	 */
	public function update($bulkEmailCourseauthorization){
		$sql = 'UPDATE bulk_email_courseauthorization SET course_id = ?, email_enabled = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bulkEmailCourseauthorization->courseId);
		$sqlQuery->setNumber($bulkEmailCourseauthorization->emailEnabled);

		$sqlQuery->setNumber($bulkEmailCourseauthorization->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bulk_email_courseauthorization';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM bulk_email_courseauthorization WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailEnabled($value){
		$sql = 'SELECT * FROM bulk_email_courseauthorization WHERE email_enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM bulk_email_courseauthorization WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailEnabled($value){
		$sql = 'DELETE FROM bulk_email_courseauthorization WHERE email_enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BulkEmailCourseauthorizationMySql 
	 */
	protected function readRow($row){
		$bulkEmailCourseauthorization = new BulkEmailCourseauthorization();
		
		$bulkEmailCourseauthorization->id = $row['id'];
		$bulkEmailCourseauthorization->courseId = $row['course_id'];
		$bulkEmailCourseauthorization->emailEnabled = $row['email_enabled'];

		return $bulkEmailCourseauthorization;
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
	 * @return BulkEmailCourseauthorizationMySql 
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