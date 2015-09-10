<?php
/**
 * Class that operate on table 'assessment_trainingexample_options_selected'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentTrainingexampleOptionsSelectedMySqlDAO implements AssessmentTrainingexampleOptionsSelectedDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentTrainingexampleOptionsSelectedMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_trainingexample_options_selected WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_trainingexample_options_selected';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_trainingexample_options_selected ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentTrainingexampleOptionsSelected primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_trainingexample_options_selected WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentTrainingexampleOptionsSelectedMySql assessmentTrainingexampleOptionsSelected
 	 */
	public function insert($assessmentTrainingexampleOptionsSelected){
		$sql = 'INSERT INTO assessment_trainingexample_options_selected (trainingexample_id, criterionoption_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentTrainingexampleOptionsSelected->trainingexampleId);
		$sqlQuery->setNumber($assessmentTrainingexampleOptionsSelected->criterionoptionId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentTrainingexampleOptionsSelected->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentTrainingexampleOptionsSelectedMySql assessmentTrainingexampleOptionsSelected
 	 */
	public function update($assessmentTrainingexampleOptionsSelected){
		$sql = 'UPDATE assessment_trainingexample_options_selected SET trainingexample_id = ?, criterionoption_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentTrainingexampleOptionsSelected->trainingexampleId);
		$sqlQuery->setNumber($assessmentTrainingexampleOptionsSelected->criterionoptionId);

		$sqlQuery->setNumber($assessmentTrainingexampleOptionsSelected->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_trainingexample_options_selected';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTrainingexampleId($value){
		$sql = 'SELECT * FROM assessment_trainingexample_options_selected WHERE trainingexample_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCriterionoptionId($value){
		$sql = 'SELECT * FROM assessment_trainingexample_options_selected WHERE criterionoption_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTrainingexampleId($value){
		$sql = 'DELETE FROM assessment_trainingexample_options_selected WHERE trainingexample_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCriterionoptionId($value){
		$sql = 'DELETE FROM assessment_trainingexample_options_selected WHERE criterionoption_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentTrainingexampleOptionsSelectedMySql 
	 */
	protected function readRow($row){
		$assessmentTrainingexampleOptionsSelected = new AssessmentTrainingexampleOptionsSelected();
		
		$assessmentTrainingexampleOptionsSelected->id = $row['id'];
		$assessmentTrainingexampleOptionsSelected->trainingexampleId = $row['trainingexample_id'];
		$assessmentTrainingexampleOptionsSelected->criterionoptionId = $row['criterionoption_id'];

		return $assessmentTrainingexampleOptionsSelected;
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
	 * @return AssessmentTrainingexampleOptionsSelectedMySql 
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