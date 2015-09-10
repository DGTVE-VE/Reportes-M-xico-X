<?php
/**
 * Class that operate on table 'student_usersignupsource'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentUsersignupsourceMySqlDAO implements StudentUsersignupsourceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentUsersignupsourceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_usersignupsource WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_usersignupsource';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_usersignupsource ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentUsersignupsource primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_usersignupsource WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUsersignupsourceMySql studentUsersignupsource
 	 */
	public function insert($studentUsersignupsource){
		$sql = 'INSERT INTO student_usersignupsource (site, user_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentUsersignupsource->site);
		$sqlQuery->setNumber($studentUsersignupsource->userId);

		$id = $this->executeInsert($sqlQuery);	
		$studentUsersignupsource->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUsersignupsourceMySql studentUsersignupsource
 	 */
	public function update($studentUsersignupsource){
		$sql = 'UPDATE student_usersignupsource SET site = ?, user_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($studentUsersignupsource->site);
		$sqlQuery->setNumber($studentUsersignupsource->userId);

		$sqlQuery->setNumber($studentUsersignupsource->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_usersignupsource';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySite($value){
		$sql = 'SELECT * FROM student_usersignupsource WHERE site = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_usersignupsource WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySite($value){
		$sql = 'DELETE FROM student_usersignupsource WHERE site = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_usersignupsource WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentUsersignupsourceMySql 
	 */
	protected function readRow($row){
		$studentUsersignupsource = new StudentUsersignupsource();
		
		$studentUsersignupsource->id = $row['id'];
		$studentUsersignupsource->site = $row['site'];
		$studentUsersignupsource->userId = $row['user_id'];

		return $studentUsersignupsource;
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
	 * @return StudentUsersignupsourceMySql 
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