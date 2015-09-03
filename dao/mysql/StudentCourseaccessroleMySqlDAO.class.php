<?php
/**
 * Class that operate on table 'student_courseaccessrole'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class StudentCourseaccessroleMySqlDAO implements StudentCourseaccessroleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return StudentCourseaccessroleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM student_courseaccessrole WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM student_courseaccessrole';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM student_courseaccessrole ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param studentCourseaccessrole primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM student_courseaccessrole WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentCourseaccessroleMySql studentCourseaccessrole
 	 */
	public function insert($studentCourseaccessrole){
		$sql = 'INSERT INTO student_courseaccessrole (user_id, org, course_id, role) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentCourseaccessrole->userId);
		$sqlQuery->set($studentCourseaccessrole->org);
		$sqlQuery->set($studentCourseaccessrole->courseId);
		$sqlQuery->set($studentCourseaccessrole->role);

		$id = $this->executeInsert($sqlQuery);	
		$studentCourseaccessrole->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentCourseaccessroleMySql studentCourseaccessrole
 	 */
	public function update($studentCourseaccessrole){
		$sql = 'UPDATE student_courseaccessrole SET user_id = ?, org = ?, course_id = ?, role = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($studentCourseaccessrole->userId);
		$sqlQuery->set($studentCourseaccessrole->org);
		$sqlQuery->set($studentCourseaccessrole->courseId);
		$sqlQuery->set($studentCourseaccessrole->role);

		$sqlQuery->setNumber($studentCourseaccessrole->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM student_courseaccessrole';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM student_courseaccessrole WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrg($value){
		$sql = 'SELECT * FROM student_courseaccessrole WHERE org = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM student_courseaccessrole WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRole($value){
		$sql = 'SELECT * FROM student_courseaccessrole WHERE role = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM student_courseaccessrole WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrg($value){
		$sql = 'DELETE FROM student_courseaccessrole WHERE org = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM student_courseaccessrole WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRole($value){
		$sql = 'DELETE FROM student_courseaccessrole WHERE role = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return StudentCourseaccessroleMySql 
	 */
	protected function readRow($row){
		$studentCourseaccessrole = new StudentCourseaccessrole();
		
		$studentCourseaccessrole->id = $row['id'];
		$studentCourseaccessrole->userId = $row['user_id'];
		$studentCourseaccessrole->org = $row['org'];
		$studentCourseaccessrole->courseId = $row['course_id'];
		$studentCourseaccessrole->role = $row['role'];

		return $studentCourseaccessrole;
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
	 * @return StudentCourseaccessroleMySql 
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