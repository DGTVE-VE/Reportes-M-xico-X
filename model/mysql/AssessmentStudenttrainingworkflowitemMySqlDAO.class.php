<?php
/**
 * Class that operate on table 'assessment_studenttrainingworkflowitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentStudenttrainingworkflowitemMySqlDAO implements AssessmentStudenttrainingworkflowitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentStudenttrainingworkflowitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentStudenttrainingworkflowitem primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentStudenttrainingworkflowitemMySql assessmentStudenttrainingworkflowitem
 	 */
	public function insert($assessmentStudenttrainingworkflowitem){
		$sql = 'INSERT INTO assessment_studenttrainingworkflowitem (workflow_id, order_num, started_at, completed_at, training_example_id) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->workflowId);
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->orderNum);
		$sqlQuery->set($assessmentStudenttrainingworkflowitem->startedAt);
		$sqlQuery->set($assessmentStudenttrainingworkflowitem->completedAt);
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->trainingExampleId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentStudenttrainingworkflowitem->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentStudenttrainingworkflowitemMySql assessmentStudenttrainingworkflowitem
 	 */
	public function update($assessmentStudenttrainingworkflowitem){
		$sql = 'UPDATE assessment_studenttrainingworkflowitem SET workflow_id = ?, order_num = ?, started_at = ?, completed_at = ?, training_example_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->workflowId);
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->orderNum);
		$sqlQuery->set($assessmentStudenttrainingworkflowitem->startedAt);
		$sqlQuery->set($assessmentStudenttrainingworkflowitem->completedAt);
		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->trainingExampleId);

		$sqlQuery->setNumber($assessmentStudenttrainingworkflowitem->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByWorkflowId($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE workflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderNum($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStartedAt($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE started_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompletedAt($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrainingExampleId($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflowitem WHERE training_example_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByWorkflowId($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE workflow_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderNum($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStartedAt($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE started_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompletedAt($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE completed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrainingExampleId($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflowitem WHERE training_example_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentStudenttrainingworkflowitemMySql 
	 */
	protected function readRow($row){
		$assessmentStudenttrainingworkflowitem = new AssessmentStudenttrainingworkflowitem();
		
		$assessmentStudenttrainingworkflowitem->id = $row['id'];
		$assessmentStudenttrainingworkflowitem->workflowId = $row['workflow_id'];
		$assessmentStudenttrainingworkflowitem->orderNum = $row['order_num'];
		$assessmentStudenttrainingworkflowitem->startedAt = $row['started_at'];
		$assessmentStudenttrainingworkflowitem->completedAt = $row['completed_at'];
		$assessmentStudenttrainingworkflowitem->trainingExampleId = $row['training_example_id'];

		return $assessmentStudenttrainingworkflowitem;
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
	 * @return AssessmentStudenttrainingworkflowitemMySql 
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