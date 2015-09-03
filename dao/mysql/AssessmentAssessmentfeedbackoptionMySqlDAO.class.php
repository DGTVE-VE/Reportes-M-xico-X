<?php
/**
 * Class that operate on table 'assessment_assessmentfeedbackoption'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAssessmentfeedbackoptionMySqlDAO implements AssessmentAssessmentfeedbackoptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAssessmentfeedbackoptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_assessmentfeedbackoption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_assessmentfeedbackoption';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_assessmentfeedbackoption ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAssessmentfeedbackoption primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_assessmentfeedbackoption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessmentfeedbackoptionMySql assessmentAssessmentfeedbackoption
 	 */
	public function insert($assessmentAssessmentfeedbackoption){
		$sql = 'INSERT INTO assessment_assessmentfeedbackoption (text) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessmentfeedbackoption->text);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAssessmentfeedbackoption->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessmentfeedbackoptionMySql assessmentAssessmentfeedbackoption
 	 */
	public function update($assessmentAssessmentfeedbackoption){
		$sql = 'UPDATE assessment_assessmentfeedbackoption SET text = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAssessmentfeedbackoption->text);

		$sqlQuery->setNumber($assessmentAssessmentfeedbackoption->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_assessmentfeedbackoption';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByText($value){
		$sql = 'SELECT * FROM assessment_assessmentfeedbackoption WHERE text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByText($value){
		$sql = 'DELETE FROM assessment_assessmentfeedbackoption WHERE text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAssessmentfeedbackoptionMySql 
	 */
	protected function readRow($row){
		$assessmentAssessmentfeedbackoption = new AssessmentAssessmentfeedbackoption();
		
		$assessmentAssessmentfeedbackoption->id = $row['id'];
		$assessmentAssessmentfeedbackoption->text = $row['text'];

		return $assessmentAssessmentfeedbackoption;
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
	 * @return AssessmentAssessmentfeedbackoptionMySql 
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