<?php
/**
 * Class that operate on table 'assessment_assessmentpart'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentpartMySqlDAO implements AssessmentAssessmentpartDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentpartMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessmentpart WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessmentpart';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessmentpart ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessmentpart primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessmentpart WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentpartMySql assessmentAssessmentpart
 	 */
	public function insert($assessmentAssessmentpart){
		$sql = 'INSERT INTO assessment_assessmentpart (assessment_id, option_id, feedback, criterion_id) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentpart->assessmentId);
		$sqlQuery->setNumber($assessmentAssessmentpart->optionId);
		$sqlQuery->set($assessmentAssessmentpart->feedback);
		$sqlQuery->setNumber($assessmentAssessmentpart->criterionId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessmentpart->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentpartMySql assessmentAssessmentpart
 	 */
	public function update($assessmentAssessmentpart){
		$sql = 'UPDATE assessment_assessmentpart SET assessment_id = ?, option_id = ?, feedback = ?, criterion_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAssessmentpart->assessmentId);
		$sqlQuery->setNumber($assessmentAssessmentpart->optionId);
		$sqlQuery->set($assessmentAssessmentpart->feedback);
		$sqlQuery->setNumber($assessmentAssessmentpart->criterionId);

		$sqlQuery->setNumber($assessmentAssessmentpart->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessmentpart';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAssessmentId($value){
		$sql = 'SELECT * FROM assessment_assessmentpart WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOptionId($value){
		$sql = 'SELECT * FROM assessment_assessmentpart WHERE option_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFeedback($value){
		$sql = 'SELECT * FROM assessment_assessmentpart WHERE feedback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCriterionId($value){
		$sql = 'SELECT * FROM assessment_assessmentpart WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAssessmentId($value){
		$sql = 'DELETE FROM assessment_assessmentpart WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOptionId($value){
		$sql = 'DELETE FROM assessment_assessmentpart WHERE option_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFeedback($value){
		$sql = 'DELETE FROM assessment_assessmentpart WHERE feedback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCriterionId($value){
		$sql = 'DELETE FROM assessment_assessmentpart WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentpartMySql 
	 */
	protected function readRow($row){
		$assessmentAssessmentpart = new AssessmentAssessmentpart();
		
		$assessmentAssessmentpart->id = $row['id'];
		$assessmentAssessmentpart->assessmentId = $row['assessment_id'];
		$assessmentAssessmentpart->optionId = $row['option_id'];
		$assessmentAssessmentpart->feedback = $row['feedback'];
		$assessmentAssessmentpart->criterionId = $row['criterion_id'];

		return $assessmentAssessmentpart;
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
	 * @return AssessmentAssessmentpartMySql 
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