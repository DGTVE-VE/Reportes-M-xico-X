<?php
/**
 * Class that operate on table 'courseware_xmodulestudentprefsfield'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareXmodulestudentprefsfieldMySqlDAO implements CoursewareXmodulestudentprefsfieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareXmodulestudentprefsfieldMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareXmodulestudentprefsfield primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmodulestudentprefsfieldMySql coursewareXmodulestudentprefsfield
 	 */
	public function insert($coursewareXmodulestudentprefsfield){
		$sql = 'INSERT INTO courseware_xmodulestudentprefsfield (field_name, module_type, value, student_id, created, modified) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmodulestudentprefsfield->fieldName);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->moduleType);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->value);
		$sqlQuery->setNumber($coursewareXmodulestudentprefsfield->studentId);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->created);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->modified);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareXmodulestudentprefsfield->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmodulestudentprefsfieldMySql coursewareXmodulestudentprefsfield
 	 */
	public function update($coursewareXmodulestudentprefsfield){
		$sql = 'UPDATE courseware_xmodulestudentprefsfield SET field_name = ?, module_type = ?, value = ?, student_id = ?, created = ?, modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmodulestudentprefsfield->fieldName);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->moduleType);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->value);
		$sqlQuery->setNumber($coursewareXmodulestudentprefsfield->studentId);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->created);
		$sqlQuery->set($coursewareXmodulestudentprefsfield->modified);

		$sqlQuery->setNumber($coursewareXmodulestudentprefsfield->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFieldName($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModuleType($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE module_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByValue($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM courseware_xmodulestudentprefsfield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFieldName($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModuleType($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE module_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByValue($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentId($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM courseware_xmodulestudentprefsfield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareXmodulestudentprefsfieldMySql 
	 */
	protected function readRow($row){
		$coursewareXmodulestudentprefsfield = new CoursewareXmodulestudentprefsfield();
		
		$coursewareXmodulestudentprefsfield->id = $row['id'];
		$coursewareXmodulestudentprefsfield->fieldName = $row['field_name'];
		$coursewareXmodulestudentprefsfield->moduleType = $row['module_type'];
		$coursewareXmodulestudentprefsfield->value = $row['value'];
		$coursewareXmodulestudentprefsfield->studentId = $row['student_id'];
		$coursewareXmodulestudentprefsfield->created = $row['created'];
		$coursewareXmodulestudentprefsfield->modified = $row['modified'];

		return $coursewareXmodulestudentprefsfield;
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
	 * @return CoursewareXmodulestudentprefsfieldMySql 
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