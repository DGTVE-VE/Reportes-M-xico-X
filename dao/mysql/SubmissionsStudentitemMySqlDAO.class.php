<?php
/**
 * Class that operate on table 'submissions_studentitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SubmissionsStudentitemMySqlDAO implements SubmissionsStudentitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SubmissionsStudentitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM submissions_studentitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM submissions_studentitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM submissions_studentitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param submissionsStudentitem primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM submissions_studentitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SubmissionsStudentitemMySql submissionsStudentitem
 	 */
	public function insert($submissionsStudentitem){
		$sql = 'INSERT INTO submissions_studentitem (student_id, course_id, item_id, item_type) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($submissionsStudentitem->studentId);
		$sqlQuery->set($submissionsStudentitem->courseId);
		$sqlQuery->set($submissionsStudentitem->itemId);
		$sqlQuery->set($submissionsStudentitem->itemType);

		$id = $this->executeInsert($sqlQuery);	
		$submissionsStudentitem->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SubmissionsStudentitemMySql submissionsStudentitem
 	 */
	public function update($submissionsStudentitem){
		$sql = 'UPDATE submissions_studentitem SET student_id = ?, course_id = ?, item_id = ?, item_type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($submissionsStudentitem->studentId);
		$sqlQuery->set($submissionsStudentitem->courseId);
		$sqlQuery->set($submissionsStudentitem->itemId);
		$sqlQuery->set($submissionsStudentitem->itemType);

		$sqlQuery->setNumber($submissionsStudentitem->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM submissions_studentitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM submissions_studentitem WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM submissions_studentitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM submissions_studentitem WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemType($value){
		$sql = 'SELECT * FROM submissions_studentitem WHERE item_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentId($value){
		$sql = 'DELETE FROM submissions_studentitem WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM submissions_studentitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM submissions_studentitem WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemType($value){
		$sql = 'DELETE FROM submissions_studentitem WHERE item_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SubmissionsStudentitemMySql 
	 */
	protected function readRow($row){
		$submissionsStudentitem = new SubmissionsStudentitem();
		
		$submissionsStudentitem->id = $row['id'];
		$submissionsStudentitem->studentId = $row['student_id'];
		$submissionsStudentitem->courseId = $row['course_id'];
		$submissionsStudentitem->itemId = $row['item_id'];
		$submissionsStudentitem->itemType = $row['item_type'];

		return $submissionsStudentitem;
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
	 * @return SubmissionsStudentitemMySql 
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