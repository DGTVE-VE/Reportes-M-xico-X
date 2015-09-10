<?php
/**
 * Class that operate on table 'assessment_criterionoption'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AssessmentCriterionoptionMySqlDAO implements AssessmentCriterionoptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AssessmentCriterionoptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM assessment_criterionoption';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM assessment_criterionoption ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param assessmentCriterionoption primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM assessment_criterionoption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentCriterionoptionMySql assessmentCriterionoption
 	 */
	public function insert($assessmentCriterionoption){
		$sql = 'INSERT INTO assessment_criterionoption (criterion_id, order_num, points, name, explanation, label) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentCriterionoption->criterionId);
		$sqlQuery->setNumber($assessmentCriterionoption->orderNum);
		$sqlQuery->setNumber($assessmentCriterionoption->points);
		$sqlQuery->set($assessmentCriterionoption->name);
		$sqlQuery->set($assessmentCriterionoption->explanation);
		$sqlQuery->set($assessmentCriterionoption->label);

		$id = $this->executeInsert($sqlQuery);	
		$assessmentCriterionoption->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentCriterionoptionMySql assessmentCriterionoption
 	 */
	public function update($assessmentCriterionoption){
		$sql = 'UPDATE assessment_criterionoption SET criterion_id = ?, order_num = ?, points = ?, name = ?, explanation = ?, label = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($assessmentCriterionoption->criterionId);
		$sqlQuery->setNumber($assessmentCriterionoption->orderNum);
		$sqlQuery->setNumber($assessmentCriterionoption->points);
		$sqlQuery->set($assessmentCriterionoption->name);
		$sqlQuery->set($assessmentCriterionoption->explanation);
		$sqlQuery->set($assessmentCriterionoption->label);

		$sqlQuery->setNumber($assessmentCriterionoption->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM assessment_criterionoption';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCriterionId($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderNum($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPoints($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE points = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExplanation($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE explanation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLabel($value){
		$sql = 'SELECT * FROM assessment_criterionoption WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCriterionId($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE criterion_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderNum($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE order_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPoints($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE points = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExplanation($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE explanation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLabel($value){
		$sql = 'DELETE FROM assessment_criterionoption WHERE label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AssessmentCriterionoptionMySql 
	 */
	protected function readRow($row){
		$assessmentCriterionoption = new AssessmentCriterionoption();
		
		$assessmentCriterionoption->id = $row['id'];
		$assessmentCriterionoption->criterionId = $row['criterion_id'];
		$assessmentCriterionoption->orderNum = $row['order_num'];
		$assessmentCriterionoption->points = $row['points'];
		$assessmentCriterionoption->name = $row['name'];
		$assessmentCriterionoption->explanation = $row['explanation'];
		$assessmentCriterionoption->label = $row['label'];

		return $assessmentCriterionoption;
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
	 * @return AssessmentCriterionoptionMySql 
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