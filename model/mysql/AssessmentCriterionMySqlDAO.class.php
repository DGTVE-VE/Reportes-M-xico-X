<?php
/**
 * Class that operate on table 'assessment_criterion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentCriterionMySqlDAO implements AssessmentCriterionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentCriterionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_criterion WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_criterion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_criterion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentCriterion primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_criterion WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentCriterionMySql assessmentCriterion
 	 */
	public function insert($assessmentCriterion){
		$sql = 'INSERT INTO assessment_criterion (rubric_id, name, order_num, prompt, label) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentCriterion->rubricId);
		$sqlQuery->set($assessmentCriterion->name);
		$sqlQuery->setNumber($assessmentCriterion->orderNum);
		$sqlQuery->set($assessmentCriterion->prompt);
		$sqlQuery->set($assessmentCriterion->label);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentCriterion->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentCriterionMySql assessmentCriterion
 	 */
	public function update($assessmentCriterion){
		$sql = 'UPDATE assessment_criterion SET rubric_id = ?, name = ?, order_num = ?, prompt = ?, label = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentCriterion->rubricId);
		$sqlQuery->set($assessmentCriterion->name);
		$sqlQuery->setNumber($assessmentCriterion->orderNum);
		$sqlQuery->set($assessmentCriterion->prompt);
		$sqlQuery->set($assessmentCriterion->label);

		$sqlQuery->setNumber($assessmentCriterion->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_criterion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRubricId($value){
		$sql = 'SELECT * FROM assessment_criterion WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM assessment_criterion WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderNum($value){
		$sql = 'SELECT * FROM assessment_criterion WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrompt($value){
		$sql = 'SELECT * FROM assessment_criterion WHERE prompt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLabel($value){
		$sql = 'SELECT * FROM assessment_criterion WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRubricId($value){
		$sql = 'DELETE FROM assessment_criterion WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM assessment_criterion WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderNum($value){
		$sql = 'DELETE FROM assessment_criterion WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrompt($value){
		$sql = 'DELETE FROM assessment_criterion WHERE prompt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLabel($value){
		$sql = 'DELETE FROM assessment_criterion WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentCriterionMySql 
	 */
	protected function readRow($row){
		$assessmentCriterion = new AssessmentCriterion();
		
		$assessmentCriterion->id = $row['id'];
		$assessmentCriterion->rubricId = $row['rubric_id'];
		$assessmentCriterion->name = $row['name'];
		$assessmentCriterion->orderNum = $row['order_num'];
		$assessmentCriterion->prompt = $row['prompt'];
		$assessmentCriterion->label = $row['label'];

		return $assessmentCriterion;
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
	 * @return AssessmentCriterionMySql 
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