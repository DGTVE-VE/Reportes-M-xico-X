<?php
/**
 * Class that operate on table 'courseware_xmodulestudentinfofield'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareXmodulestudentinfofieldMySqlDAO implements CoursewareXmodulestudentinfofieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareXmodulestudentinfofieldMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareXmodulestudentinfofield primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmodulestudentinfofieldMySql coursewareXmodulestudentinfofield
 	 */
	public function insert($coursewareXmodulestudentinfofield){
		$sql = 'INSERT INTO courseware_xmodulestudentinfofield (field_name, value, student_id, created, modified) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmodulestudentinfofield->fieldName);
		$sqlQuery->set($coursewareXmodulestudentinfofield->value);
		$sqlQuery->setNumber($coursewareXmodulestudentinfofield->studentId);
		$sqlQuery->set($coursewareXmodulestudentinfofield->created);
		$sqlQuery->set($coursewareXmodulestudentinfofield->modified);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareXmodulestudentinfofield->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmodulestudentinfofieldMySql coursewareXmodulestudentinfofield
 	 */
	public function update($coursewareXmodulestudentinfofield){
		$sql = 'UPDATE courseware_xmodulestudentinfofield SET field_name = ?, value = ?, student_id = ?, created = ?, modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmodulestudentinfofield->fieldName);
		$sqlQuery->set($coursewareXmodulestudentinfofield->value);
		$sqlQuery->setNumber($coursewareXmodulestudentinfofield->studentId);
		$sqlQuery->set($coursewareXmodulestudentinfofield->created);
		$sqlQuery->set($coursewareXmodulestudentinfofield->modified);

		$sqlQuery->setNumber($coursewareXmodulestudentinfofield->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFieldName($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByValue($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentinfofield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFieldName($value){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByValue($value){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentId($value){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM courseware_xmodulestudentinfofield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareXmodulestudentinfofieldMySql 
	 */
	protected function readRow($row){
		$coursewareXmodulestudentinfofield = new CoursewareXmodulestudentinfofield();
		
		$coursewareXmodulestudentinfofield->id = $row['id'];
		$coursewareXmodulestudentinfofield->fieldName = $row['field_name'];
		$coursewareXmodulestudentinfofield->value = $row['value'];
		$coursewareXmodulestudentinfofield->studentId = $row['student_id'];
		$coursewareXmodulestudentinfofield->created = $row['created'];
		$coursewareXmodulestudentinfofield->modified = $row['modified'];

		return $coursewareXmodulestudentinfofield;
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
	 * @return CoursewareXmodulestudentinfofieldMySql 
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