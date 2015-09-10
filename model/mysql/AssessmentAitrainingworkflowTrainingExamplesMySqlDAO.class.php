<?php
/**
 * Class that operate on table 'assessment_aitrainingworkflow_training_examples'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAitrainingworkflowTrainingExamplesMySqlDAO implements AssessmentAitrainingworkflowTrainingExamplesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAitrainingworkflowTrainingExamplesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow_training_examples WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow_training_examples';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow_training_examples ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAitrainingworkflowTrainingExample primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_aitrainingworkflow_training_examples WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAitrainingworkflowTrainingExamplesMySql assessmentAitrainingworkflowTrainingExample
 	 */
	public function insert($assessmentAitrainingworkflowTrainingExample){
		$sql = 'INSERT INTO assessment_aitrainingworkflow_training_examples (aitrainingworkflow_id, trainingexample_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAitrainingworkflowTrainingExample->aitrainingworkflowId);
		$sqlQuery->setNumber($assessmentAitrainingworkflowTrainingExample->trainingexampleId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAitrainingworkflowTrainingExample->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAitrainingworkflowTrainingExamplesMySql assessmentAitrainingworkflowTrainingExample
 	 */
	public function update($assessmentAitrainingworkflowTrainingExample){
		$sql = 'UPDATE assessment_aitrainingworkflow_training_examples SET aitrainingworkflow_id = ?, trainingexample_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAitrainingworkflowTrainingExample->aitrainingworkflowId);
		$sqlQuery->setNumber($assessmentAitrainingworkflowTrainingExample->trainingexampleId);

		$sqlQuery->setNumber($assessmentAitrainingworkflowTrainingExample->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_aitrainingworkflow_training_examples';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAitrainingworkflowId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow_training_examples WHERE aitrainingworkflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrainingexampleId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow_training_examples WHERE trainingexample_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAitrainingworkflowId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow_training_examples WHERE aitrainingworkflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrainingexampleId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow_training_examples WHERE trainingexample_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAitrainingworkflowTrainingExamplesMySql 
	 */
	protected function readRow($row){
		$assessmentAitrainingworkflowTrainingExample = new AssessmentAitrainingworkflowTrainingExample();
		
		$assessmentAitrainingworkflowTrainingExample->id = $row['id'];
		$assessmentAitrainingworkflowTrainingExample->aitrainingworkflowId = $row['aitrainingworkflow_id'];
		$assessmentAitrainingworkflowTrainingExample->trainingexampleId = $row['trainingexample_id'];

		return $assessmentAitrainingworkflowTrainingExample;
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
	 * @return AssessmentAitrainingworkflowTrainingExamplesMySql 
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