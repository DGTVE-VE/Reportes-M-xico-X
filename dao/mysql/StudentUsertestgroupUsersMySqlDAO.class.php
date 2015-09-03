<?php
/**
 * Class that operate on table 'student_usertestgroup_users'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentUsertestgroupUsersMySqlDAO implements StudentUsertestgroupUsersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentUsertestgroupUsersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_usertestgroup_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_usertestgroup_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_usertestgroup_users ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentUsertestgroupUser primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_usertestgroup_users WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentUsertestgroupUsersMySql studentUsertestgroupUser
 	 */
	public function insert($studentUsertestgroupUser){
		$sql = 'INSERT INTO student_usertestgroup_users (usertestgroup_id, user_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentUsertestgroupUser->usertestgroupId);
		$sqlQuery->setNumber($studentUsertestgroupUser->userId);

		$id = $this->executeInsert($sqlQuery);	
		$studentUsertestgroupUser->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentUsertestgroupUsersMySql studentUsertestgroupUser
 	 */
	public function update($studentUsertestgroupUser){
		$sql = 'UPDATE student_usertestgroup_users SET usertestgroup_id = ?, user_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentUsertestgroupUser->usertestgroupId);
		$sqlQuery->setNumber($studentUsertestgroupUser->userId);

		$sqlQuery->setNumber($studentUsertestgroupUser->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_usertestgroup_users';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUsertestgroupId($value){
		$sql = 'SELECT * FROM student_usertestgroup_users WHERE usertestgroup_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_usertestgroup_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUsertestgroupId($value){
		$sql = 'DELETE FROM student_usertestgroup_users WHERE usertestgroup_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_usertestgroup_users WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentUsertestgroupUsersMySql 
	 */
	protected function readRow($row){
		$studentUsertestgroupUser = new StudentUsertestgroupUser();
		
		$studentUsertestgroupUser->id = $row['id'];
		$studentUsertestgroupUser->usertestgroupId = $row['usertestgroup_id'];
		$studentUsertestgroupUser->userId = $row['user_id'];

		return $studentUsertestgroupUser;
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
	 * @return StudentUsertestgroupUsersMySql 
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