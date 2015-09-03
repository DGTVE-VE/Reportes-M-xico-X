<?php
/**
 * Class that operate on table 'assessment_studenttrainingworkflow'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentStudenttrainingworkflowMySqlDAO implements AssessmentStudenttrainingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentStudenttrainingworkflowMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentStudenttrainingworkflow primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentStudenttrainingworkflowMySql assessmentStudenttrainingworkflow
 	 */
	public function insert($assessmentStudenttrainingworkflow){
		$sql = 'INSERT INTO assessment_studenttrainingworkflow (submission_uuid, student_id, item_id, course_id) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentStudenttrainingworkflow->submissionUuid);
		$sqlQuery->set($assessmentStudenttrainingworkflow->studentId);
		$sqlQuery->set($assessmentStudenttrainingworkflow->itemId);
		$sqlQuery->set($assessmentStudenttrainingworkflow->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentStudenttrainingworkflow->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentStudenttrainingworkflowMySql assessmentStudenttrainingworkflow
 	 */
	public function update($assessmentStudenttrainingworkflow){
		$sql = 'UPDATE assessment_studenttrainingworkflow SET submission_uuid = ?, student_id = ?, item_id = ?, course_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($assessmentStudenttrainingworkflow->submissionUuid);
		$sqlQuery->set($assessmentStudenttrainingworkflow->studentId);
		$sqlQuery->set($assessmentStudenttrainingworkflow->itemId);
		$sqlQuery->set($assessmentStudenttrainingworkflow->courseId);

		$sqlQuery->setNumber($assessmentStudenttrainingworkflow->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStudentId($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM assessment_studenttrainingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStudentId($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow WHERE student_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM assessment_studenttrainingworkflow WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentStudenttrainingworkflowMySql 
	 */
	protected function readRow($row){
		$assessmentStudenttrainingworkflow = new AssessmentStudenttrainingworkflow();
		
		$assessmentStudenttrainingworkflow->id = $row['id'];
		$assessmentStudenttrainingworkflow->submissionUuid = $row['submission_uuid'];
		$assessmentStudenttrainingworkflow->studentId = $row['student_id'];
		$assessmentStudenttrainingworkflow->itemId = $row['item_id'];
		$assessmentStudenttrainingworkflow->courseId = $row['course_id'];

		return $assessmentStudenttrainingworkflow;
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
	 * @return AssessmentStudenttrainingworkflowMySql 
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