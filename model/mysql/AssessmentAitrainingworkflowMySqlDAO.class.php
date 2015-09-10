<?php
/**
 * Class that operate on table 'assessment_aitrainingworkflow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAitrainingworkflowMySqlDAO implements AssessmentAitrainingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAitrainingworkflowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAitrainingworkflow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAitrainingworkflowMySql assessmentAitrainingworkflow
 	 */
	public function insert($assessmentAitrainingworkflow){
		$sql = 'INSERT INTO assessment_aitrainingworkflow (uuid, algorithm_id, classifier_set_id, scheduled_at, completed_at, item_id, course_id) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAitrainingworkflow->uuid);
		$sqlQuery->set($assessmentAitrainingworkflow->algorithmId);
		$sqlQuery->setNumber($assessmentAitrainingworkflow->classifierSetId);
		$sqlQuery->set($assessmentAitrainingworkflow->scheduledAt);
		$sqlQuery->set($assessmentAitrainingworkflow->completedAt);
		$sqlQuery->set($assessmentAitrainingworkflow->itemId);
		$sqlQuery->set($assessmentAitrainingworkflow->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAitrainingworkflow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAitrainingworkflowMySql assessmentAitrainingworkflow
 	 */
	public function update($assessmentAitrainingworkflow){
		$sql = 'UPDATE assessment_aitrainingworkflow SET uuid = ?, algorithm_id = ?, classifier_set_id = ?, scheduled_at = ?, completed_at = ?, item_id = ?, course_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentAitrainingworkflow->uuid);
		$sqlQuery->set($assessmentAitrainingworkflow->algorithmId);
		$sqlQuery->setNumber($assessmentAitrainingworkflow->classifierSetId);
		$sqlQuery->set($assessmentAitrainingworkflow->scheduledAt);
		$sqlQuery->set($assessmentAitrainingworkflow->completedAt);
		$sqlQuery->set($assessmentAitrainingworkflow->itemId);
		$sqlQuery->set($assessmentAitrainingworkflow->courseId);

		$sqlQuery->setNumber($assessmentAitrainingworkflow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_aitrainingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUuid($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlgorithmId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClassifierSetId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScheduledAt($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE scheduled_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompletedAt($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM assessment_aitrainingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUuid($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlgorithmId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClassifierSetId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE classifier_set_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScheduledAt($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE scheduled_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompletedAt($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM assessment_aitrainingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAitrainingworkflowMySql 
	 */
	protected function readRow($row){
		$assessmentAitrainingworkflow = new AssessmentAitrainingworkflow();
		
		$assessmentAitrainingworkflow->id = $row['id'];
		$assessmentAitrainingworkflow->uuid = $row['uuid'];
		$assessmentAitrainingworkflow->algorithmId = $row['algorithm_id'];
		$assessmentAitrainingworkflow->classifierSetId = $row['classifier_set_id'];
		$assessmentAitrainingworkflow->scheduledAt = $row['scheduled_at'];
		$assessmentAitrainingworkflow->completedAt = $row['completed_at'];
		$assessmentAitrainingworkflow->itemId = $row['item_id'];
		$assessmentAitrainingworkflow->courseId = $row['course_id'];

		return $assessmentAitrainingworkflow;
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
	 * @return AssessmentAitrainingworkflowMySql 
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