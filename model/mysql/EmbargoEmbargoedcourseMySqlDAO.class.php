<?php
/**
 * Class that operate on table 'embargo_embargoedcourse'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoEmbargoedcourseMySqlDAO implements EmbargoEmbargoedcourseDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoEmbargoedcourseMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_embargoedcourse WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_embargoedcourse';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_embargoedcourse ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoEmbargoedcourse primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_embargoedcourse WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoEmbargoedcourseMySql embargoEmbargoedcourse
 	 */
	public function insert($embargoEmbargoedcourse){
		$sql = 'INSERT INTO embargo_embargoedcourse (course_id, embargoed) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoEmbargoedcourse->courseId);
		$sqlQuery->setNumber($embargoEmbargoedcourse->embargoed);

		$id = $this->executeInsert($sqlQuery);	
		$embargoEmbargoedcourse->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoEmbargoedcourseMySql embargoEmbargoedcourse
 	 */
	public function update($embargoEmbargoedcourse){
		$sql = 'UPDATE embargo_embargoedcourse SET course_id = ?, embargoed = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoEmbargoedcourse->courseId);
		$sqlQuery->setNumber($embargoEmbargoedcourse->embargoed);

		$sqlQuery->setNumber($embargoEmbargoedcourse->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_embargoedcourse';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM embargo_embargoedcourse WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmbargoed($value){
		$sql = 'SELECT * FROM embargo_embargoedcourse WHERE embargoed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM embargo_embargoedcourse WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmbargoed($value){
		$sql = 'DELETE FROM embargo_embargoedcourse WHERE embargoed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoEmbargoedcourseMySql 
	 */
	protected function readRow($row){
		$embargoEmbargoedcourse = new EmbargoEmbargoedcourse();
		
		$embargoEmbargoedcourse->id = $row['id'];
		$embargoEmbargoedcourse->courseId = $row['course_id'];
		$embargoEmbargoedcourse->embargoed = $row['embargoed'];

		return $embargoEmbargoedcourse;
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
	 * @return EmbargoEmbargoedcourseMySql 
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