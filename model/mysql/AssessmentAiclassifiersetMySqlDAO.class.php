<?php
/**
 * Class that operate on table 'assessment_aiclassifierset'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentAiclassifiersetMySqlDAO implements AssessmentAiclassifiersetDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentAiclassifiersetMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_aiclassifierset';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_aiclassifierset ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentAiclassifierset primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAiclassifiersetMySql assessmentAiclassifierset
 	 */
	public function insert($assessmentAiclassifierset){
		$sql = 'INSERT INTO assessment_aiclassifierset (rubric_id, created_at, algorithm_id, course_id, item_id) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAiclassifierset->rubricId);
		$sqlQuery->set($assessmentAiclassifierset->createdAt);
		$sqlQuery->set($assessmentAiclassifierset->algorithmId);
		$sqlQuery->set($assessmentAiclassifierset->courseId);
		$sqlQuery->set($assessmentAiclassifierset->itemId);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentAiclassifierset->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAiclassifiersetMySql assessmentAiclassifierset
 	 */
	public function update($assessmentAiclassifierset){
		$sql = 'UPDATE assessment_aiclassifierset SET rubric_id = ?, created_at = ?, algorithm_id = ?, course_id = ?, item_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentAiclassifierset->rubricId);
		$sqlQuery->set($assessmentAiclassifierset->createdAt);
		$sqlQuery->set($assessmentAiclassifierset->algorithmId);
		$sqlQuery->set($assessmentAiclassifierset->courseId);
		$sqlQuery->set($assessmentAiclassifierset->itemId);

		$sqlQuery->setNumber($assessmentAiclassifierset->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_aiclassifierset';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRubricId($value){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlgorithmId($value){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByItemId($value){
		$sql = 'SELECT * FROM assessment_aiclassifierset WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRubricId($value){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE rubric_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlgorithmId($value){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE algorithm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByItemId($value){
		$sql = 'DELETE FROM assessment_aiclassifierset WHERE item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentAiclassifiersetMySql 
	 */
	protected function readRow($row){
		$assessmentAiclassifierset = new AssessmentAiclassifierset();
		
		$assessmentAiclassifierset->id = $row['id'];
		$assessmentAiclassifierset->rubricId = $row['rubric_id'];
		$assessmentAiclassifierset->createdAt = $row['created_at'];
		$assessmentAiclassifierset->algorithmId = $row['algorithm_id'];
		$assessmentAiclassifierset->courseId = $row['course_id'];
		$assessmentAiclassifierset->itemId = $row['item_id'];

		return $assessmentAiclassifierset;
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
	 * @return AssessmentAiclassifiersetMySql 
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