<?php
/**
 * Class that operate on table 'assessment_trainingexample'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentTrainingexampleMySqlDAO implements AssessmentTrainingexampleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentTrainingexampleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_trainingexample WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_trainingexample';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_trainingexample ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentTrainingexample primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_trainingexample WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentTrainingexampleMySql assessmentTrainingexample
 	 */
	public function insert($assessmentTrainingexample){
		$sql = 'INSERT INTO assessment_trainingexample (raw_answer, rubric_id, content_hash) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentTrainingexample->rawAnswer);
		$sqlQuery->setNumber($assessmentTrainingexample->rubricId);
		$sqlQuery->set($assessmentTrainingexample->contentHash);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentTrainingexample->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentTrainingexampleMySql assessmentTrainingexample
 	 */
	public function update($assessmentTrainingexample){
		$sql = 'UPDATE assessment_trainingexample SET raw_answer = ?, rubric_id = ?, content_hash = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentTrainingexample->rawAnswer);
		$sqlQuery->setNumber($assessmentTrainingexample->rubricId);
		$sqlQuery->set($assessmentTrainingexample->contentHash);

		$sqlQuery->setNumber($assessmentTrainingexample->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_trainingexample';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRawAnswer($value){
		$sql = 'SELECT * FROM assessment_trainingexample WHERE raw_answer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRubricId($value){
		$sql = 'SELECT * FROM assessment_trainingexample WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContentHash($value){
		$sql = 'SELECT * FROM assessment_trainingexample WHERE content_hash = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRawAnswer($value){
		$sql = 'DELETE FROM assessment_trainingexample WHERE raw_answer = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRubricId($value){
		$sql = 'DELETE FROM assessment_trainingexample WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContentHash($value){
		$sql = 'DELETE FROM assessment_trainingexample WHERE content_hash = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentTrainingexampleMySql 
	 */
	protected function readRow($row){
		$assessmentTrainingexample = new AssessmentTrainingexample();
		
		$assessmentTrainingexample->id = $row['id'];
		$assessmentTrainingexample->rawAnswer = $row['raw_answer'];
		$assessmentTrainingexample->rubricId = $row['rubric_id'];
		$assessmentTrainingexample->contentHash = $row['content_hash'];

		return $assessmentTrainingexample;
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
	 * @return AssessmentTrainingexampleMySql 
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