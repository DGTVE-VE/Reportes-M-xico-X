<?php
/**
 * Class that operate on table 'licenses_coursesoftware'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class LicensesCoursesoftwareMySqlDAO implements LicensesCoursesoftwareDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LicensesCoursesoftwareMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM licenses_coursesoftware WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM licenses_coursesoftware';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM licenses_coursesoftware ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param licensesCoursesoftware primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM licenses_coursesoftware WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LicensesCoursesoftwareMySql licensesCoursesoftware
 	 */
	public function insert($licensesCoursesoftware){
		$sql = 'INSERT INTO licenses_coursesoftware (name, full_name, url, course_id) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($licensesCoursesoftware->name);
		$sqlQuery->set($licensesCoursesoftware->fullName);
		$sqlQuery->set($licensesCoursesoftware->url);
		$sqlQuery->set($licensesCoursesoftware->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$licensesCoursesoftware->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LicensesCoursesoftwareMySql licensesCoursesoftware
 	 */
	public function update($licensesCoursesoftware){
		$sql = 'UPDATE licenses_coursesoftware SET name = ?, full_name = ?, url = ?, course_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($licensesCoursesoftware->name);
		$sqlQuery->set($licensesCoursesoftware->fullName);
		$sqlQuery->set($licensesCoursesoftware->url);
		$sqlQuery->set($licensesCoursesoftware->courseId);

		$sqlQuery->setNumber($licensesCoursesoftware->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM licenses_coursesoftware';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM licenses_coursesoftware WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFullName($value){
		$sql = 'SELECT * FROM licenses_coursesoftware WHERE full_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM licenses_coursesoftware WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM licenses_coursesoftware WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM licenses_coursesoftware WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFullName($value){
		$sql = 'DELETE FROM licenses_coursesoftware WHERE full_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM licenses_coursesoftware WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM licenses_coursesoftware WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LicensesCoursesoftwareMySql 
	 */
	protected function readRow($row){
		$licensesCoursesoftware = new LicensesCoursesoftware();
		
		$licensesCoursesoftware->id = $row['id'];
		$licensesCoursesoftware->name = $row['name'];
		$licensesCoursesoftware->fullName = $row['full_name'];
		$licensesCoursesoftware->url = $row['url'];
		$licensesCoursesoftware->courseId = $row['course_id'];

		return $licensesCoursesoftware;
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
	 * @return LicensesCoursesoftwareMySql 
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