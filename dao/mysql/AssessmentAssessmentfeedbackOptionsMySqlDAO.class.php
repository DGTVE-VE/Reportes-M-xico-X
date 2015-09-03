<?php
/**
 * Class that operate on table 'assessment_assessmentfeedback_options'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentfeedbackOptionsMySqlDAO implements AssessmentAssessmentfeedbackOptionsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentfeedbackOptionsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_options WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_options';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_options ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessmentfeedbackOption primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessmentfeedback_options WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackOptionsMySql assessmentAssessmentfeedbackOption
 	 */
	public function insert($assessmentAssessmentfeedbackOption){
		$sql = 'INSERT INTO assessment_assessmentfeedback_options (assessmentfeedback_id, assessmentfeedbackoption_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentfeedbackOption->assessmentfeedbackId);
		$sqlQuery->setNumber($assessmentAssessmentfeedbackOption->assessmentfeedbackoptionId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessmentfeedbackOption->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackOptionsMySql assessmentAssessmentfeedbackOption
 	 */
	public function update($assessmentAssessmentfeedbackOption){
		$sql = 'UPDATE assessment_assessmentfeedback_options SET assessmentfeedback_id = ?, assessmentfeedbackoption_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentfeedbackOption->assessmentfeedbackId);
		$sqlQuery->setNumber($assessmentAssessmentfeedbackOption->assessmentfeedbackoptionId);

		$sqlQuery->setNumber($assessmentAssessmentfeedbackOption->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessmentfeedback_options';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAssessmentfeedbackId($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_options WHERE assessmentfeedback_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssessmentfeedbackoptionId($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_options WHERE assessmentfeedbackoption_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAssessmentfeedbackId($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback_options WHERE assessmentfeedback_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssessmentfeedbackoptionId($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback_options WHERE assessmentfeedbackoption_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentfeedbackOptionsMySql 
	 */
	protected function readRow($row){
		$assessmentAssessmentfeedbackOption = new AssessmentAssessmentfeedbackOption();
		
		$assessmentAssessmentfeedbackOption->id = $row['id'];
		$assessmentAssessmentfeedbackOption->assessmentfeedbackId = $row['assessmentfeedback_id'];
		$assessmentAssessmentfeedbackOption->assessmentfeedbackoptionId = $row['assessmentfeedbackoption_id'];

		return $assessmentAssessmentfeedbackOption;
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
	 * @return AssessmentAssessmentfeedbackOptionsMySql 
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