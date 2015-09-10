<?php
/**
 * Class that operate on table 'assessment_assessmentfeedback_assessments'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentfeedbackAssessmentsMySqlDAO implements AssessmentAssessmentfeedbackAssessmentsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentfeedbackAssessmentsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_assessments WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_assessments';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_assessments ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessmentfeedbackAssessment primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessmentfeedback_assessments WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackAssessmentsMySql assessmentAssessmentfeedbackAssessment
 	 */
	public function insert($assessmentAssessmentfeedbackAssessment){
		$sql = 'INSERT INTO assessment_assessmentfeedback_assessments (assessmentfeedback_id, assessment_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentfeedbackAssessment->assessmentfeedbackId);
		$sqlQuery->setNumber($assessmentAssessmentfeedbackAssessment->assessmentId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessmentfeedbackAssessment->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackAssessmentsMySql assessmentAssessmentfeedbackAssessment
 	 */
	public function update($assessmentAssessmentfeedbackAssessment){
		$sql = 'UPDATE assessment_assessmentfeedback_assessments SET assessmentfeedback_id = ?, assessment_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentfeedbackAssessment->assessmentfeedbackId);
		$sqlQuery->setNumber($assessmentAssessmentfeedbackAssessment->assessmentId);

		$sqlQuery->setNumber($assessmentAssessmentfeedbackAssessment->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessmentfeedback_assessments';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAssessmentfeedbackId($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_assessments WHERE assessmentfeedback_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssessmentId($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedback_assessments WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAssessmentfeedbackId($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback_assessments WHERE assessmentfeedback_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssessmentId($value){
		$sql = 'DELETE FROM assessment_assessmentfeedback_assessments WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentfeedbackAssessmentsMySql 
	 */
	protected function readRow($row){
		$assessmentAssessmentfeedbackAssessment = new AssessmentAssessmentfeedbackAssessment();
		
		$assessmentAssessmentfeedbackAssessment->id = $row['id'];
		$assessmentAssessmentfeedbackAssessment->assessmentfeedbackId = $row['assessmentfeedback_id'];
		$assessmentAssessmentfeedbackAssessment->assessmentId = $row['assessment_id'];

		return $assessmentAssessmentfeedbackAssessment;
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
	 * @return AssessmentAssessmentfeedbackAssessmentsMySql 
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