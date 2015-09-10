<?php
/**
 * Class that operate on table 'assessment_peerworkflowitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentPeerworkflowitemMySqlDAO implements AssessmentPeerworkflowitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentPeerworkflowitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_peerworkflowitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_peerworkflowitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentPeerworkflowitem primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentPeerworkflowitemMySql assessmentPeerworkflowitem
 	 */
	public function insert($assessmentPeerworkflowitem){
		$sql = 'INSERT INTO assessment_peerworkflowitem (scorer_id, author_id, submission_uuid, started_at, assessment_id, scored) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentPeerworkflowitem->scorerId);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->authorId);
		$sqlQuery->set($assessmentPeerworkflowitem->submissionUuid);
		$sqlQuery->set($assessmentPeerworkflowitem->startedAt);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->assessmentId);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->scored);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentPeerworkflowitem->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentPeerworkflowitemMySql assessmentPeerworkflowitem
 	 */
	public function update($assessmentPeerworkflowitem){
		$sql = 'UPDATE assessment_peerworkflowitem SET scorer_id = ?, author_id = ?, submission_uuid = ?, started_at = ?, assessment_id = ?, scored = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentPeerworkflowitem->scorerId);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->authorId);
		$sqlQuery->set($assessmentPeerworkflowitem->submissionUuid);
		$sqlQuery->set($assessmentPeerworkflowitem->startedAt);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->assessmentId);
		$sqlQuery->setNumber($assessmentPeerworkflowitem->scored);

		$sqlQuery->setNumber($assessmentPeerworkflowitem->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_peerworkflowitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByScorerId($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE scorer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAuthorId($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE author_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmissionUuid($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStartedAt($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE started_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssessmentId($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScored($value){
		$sql = 'SELECT * FROM assessment_peerworkflowitem WHERE scored = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByScorerId($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE scorer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAuthorId($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE author_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmissionUuid($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE submission_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStartedAt($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE started_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssessmentId($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE assessment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScored($value){
		$sql = 'DELETE FROM assessment_peerworkflowitem WHERE scored = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentPeerworkflowitemMySql 
	 */
	protected function readRow($row){
		$assessmentPeerworkflowitem = new AssessmentPeerworkflowitem();
		
		$assessmentPeerworkflowitem->id = $row['id'];
		$assessmentPeerworkflowitem->scorerId = $row['scorer_id'];
		$assessmentPeerworkflowitem->authorId = $row['author_id'];
		$assessmentPeerworkflowitem->submissionUuid = $row['submission_uuid'];
		$assessmentPeerworkflowitem->startedAt = $row['started_at'];
		$assessmentPeerworkflowitem->assessmentId = $row['assessment_id'];
		$assessmentPeerworkflowitem->scored = $row['scored'];

		return $assessmentPeerworkflowitem;
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
	 * @return AssessmentPeerworkflowitemMySql 
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