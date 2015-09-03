<?php
/**
 * Class that operate on table 'courseware_xmoduleuserstatesummaryfield'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CoursewareXmoduleuserstatesummaryfieldMySqlDAO implements CoursewareXmoduleuserstatesummaryfieldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CoursewareXmoduleuserstatesummaryfieldMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coursewareXmoduleuserstatesummaryfield primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CoursewareXmoduleuserstatesummaryfieldMySql coursewareXmoduleuserstatesummaryfield
 	 */
	public function insert($coursewareXmoduleuserstatesummaryfield){
		$sql = 'INSERT INTO courseware_xmoduleuserstatesummaryfield (field_name, usage_id, value, created, modified) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->fieldName);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->usageId);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->value);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->created);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->modified);

		$id = $this->executeInsert($sqlQuery);	
		$coursewareXmoduleuserstatesummaryfield->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoursewareXmoduleuserstatesummaryfieldMySql coursewareXmoduleuserstatesummaryfield
 	 */
	public function update($coursewareXmoduleuserstatesummaryfield){
		$sql = 'UPDATE courseware_xmoduleuserstatesummaryfield SET field_name = ?, usage_id = ?, value = ?, created = ?, modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->fieldName);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->usageId);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->value);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->created);
		$sqlQuery->set($coursewareXmoduleuserstatesummaryfield->modified);

		$sqlQuery->setNumber($coursewareXmoduleuserstatesummaryfield->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFieldName($value){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUsageId($value){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE usage_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByValue($value){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM courseware_xmoduleuserstatesummaryfield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFieldName($value){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUsageId($value){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE usage_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByValue($value){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM courseware_xmoduleuserstatesummaryfield WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CoursewareXmoduleuserstatesummaryfieldMySql 
	 */
	protected function readRow($row){
		$coursewareXmoduleuserstatesummaryfield = new CoursewareXmoduleuserstatesummaryfield();
		
		$coursewareXmoduleuserstatesummaryfield->id = $row['id'];
		$coursewareXmoduleuserstatesummaryfield->fieldName = $row['field_name'];
		$coursewareXmoduleuserstatesummaryfield->usageId = $row['usage_id'];
		$coursewareXmoduleuserstatesummaryfield->value = $row['value'];
		$coursewareXmoduleuserstatesummaryfield->created = $row['created'];
		$coursewareXmoduleuserstatesummaryfield->modified = $row['modified'];

		return $coursewareXmoduleuserstatesummaryfield;
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
	 * @return CoursewareXmoduleuserstatesummaryfieldMySql 
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