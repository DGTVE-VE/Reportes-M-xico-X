<?php
/**
 * Class that operate on table 'course_structures_coursestructure'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseStructuresCoursestructureMySqlDAO implements CourseStructuresCoursestructureDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseStructuresCoursestructureMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_structures_coursestructure WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_structures_coursestructure';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_structures_coursestructure ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseStructuresCoursestructure primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_structures_coursestructure WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseStructuresCoursestructureMySql courseStructuresCoursestructure
 	 */
	public function insert($courseStructuresCoursestructure){
		$sql = 'INSERT INTO course_structures_coursestructure (created, modified, course_id, structure_json) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseStructuresCoursestructure->created);
		$sqlQuery->set($courseStructuresCoursestructure->modified);
		$sqlQuery->set($courseStructuresCoursestructure->courseId);
		$sqlQuery->set($courseStructuresCoursestructure->structureJson);

		$id = $this->executeInsert($sqlQuery);	
		$courseStructuresCoursestructure->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseStructuresCoursestructureMySql courseStructuresCoursestructure
 	 */
	public function update($courseStructuresCoursestructure){
		$sql = 'UPDATE course_structures_coursestructure SET created = ?, modified = ?, course_id = ?, structure_json = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseStructuresCoursestructure->created);
		$sqlQuery->set($courseStructuresCoursestructure->modified);
		$sqlQuery->set($courseStructuresCoursestructure->courseId);
		$sqlQuery->set($courseStructuresCoursestructure->structureJson);

		$sqlQuery->setNumber($courseStructuresCoursestructure->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_structures_coursestructure';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM course_structures_coursestructure WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM course_structures_coursestructure WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM course_structures_coursestructure WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStructureJson($value){
		$sql = 'SELECT * FROM course_structures_coursestructure WHERE structure_json = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM course_structures_coursestructure WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM course_structures_coursestructure WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM course_structures_coursestructure WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStructureJson($value){
		$sql = 'DELETE FROM course_structures_coursestructure WHERE structure_json = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseStructuresCoursestructureMySql 
	 */
	protected function readRow($row){
		$courseStructuresCoursestructure = new CourseStructuresCoursestructure();
		
		$courseStructuresCoursestructure->id = $row['id'];
		$courseStructuresCoursestructure->created = $row['created'];
		$courseStructuresCoursestructure->modified = $row['modified'];
		$courseStructuresCoursestructure->courseId = $row['course_id'];
		$courseStructuresCoursestructure->structureJson = $row['structure_json'];

		return $courseStructuresCoursestructure;
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
	 * @return CourseStructuresCoursestructureMySql 
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