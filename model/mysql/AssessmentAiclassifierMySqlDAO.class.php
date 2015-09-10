<?php
/**
 * Class that operate on table 'assessment_aiclassifier'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAiclassifierMySqlDAO implements AssessmentAiclassifierDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAiclassifierMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_aiclassifier WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_aiclassifier';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_aiclassifier ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAiclassifier primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_aiclassifier WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAiclassifierMySql assessmentAiclassifier
 	 */
	public function insert($assessmentAiclassifier){
		$sql = 'INSERT INTO assessment_aiclassifier (classifier_set_id, criterion_id, classifier_data) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAiclassifier->classifierSetId);
		$sqlQuery->setNumber($assessmentAiclassifier->criterionId);
		$sqlQuery->set($assessmentAiclassifier->classifierData);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAiclassifier->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAiclassifierMySql assessmentAiclassifier
 	 */
	public function update($assessmentAiclassifier){
		$sql = 'UPDATE assessment_aiclassifier SET classifier_set_id = ?, criterion_id = ?, classifier_data = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAiclassifier->classifierSetId);
		$sqlQuery->setNumber($assessmentAiclassifier->criterionId);
		$sqlQuery->set($assessmentAiclassifier->classifierData);

		$sqlQuery->setNumber($assessmentAiclassifier->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_aiclassifier';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByClassifierSetId($value){
		$sql = 'SELECT * FROM assessment_aiclassifier WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCriterionId($value){
		$sql = 'SELECT * FROM assessment_aiclassifier WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClassifierData($value){
		$sql = 'SELECT * FROM assessment_aiclassifier WHERE classifier_data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByClassifierSetId($value){
		$sql = 'DELETE FROM assessment_aiclassifier WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCriterionId($value){
		$sql = 'DELETE FROM assessment_aiclassifier WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClassifierData($value){
		$sql = 'DELETE FROM assessment_aiclassifier WHERE classifier_data = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAiclassifierMySql 
	 */
	protected function readRow($row){
		$assessmentAiclassifier = new AssessmentAiclassifier();
		
		$assessmentAiclassifier->id = $row['id'];
		$assessmentAiclassifier->classifierSetId = $row['classifier_set_id'];
		$assessmentAiclassifier->criterionId = $row['criterion_id'];
		$assessmentAiclassifier->classifierData = $row['classifier_data'];

		return $assessmentAiclassifier;
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
	 * @return AssessmentAiclassifierMySql 
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