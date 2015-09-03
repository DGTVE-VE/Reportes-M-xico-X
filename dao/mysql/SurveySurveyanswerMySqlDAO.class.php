<?php
/**
 * Class that operate on table 'survey_surveyanswer'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SurveySurveyanswerMySqlDAO implements SurveySurveyanswerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SurveySurveyanswerMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM survey_surveyanswer';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM survey_surveyanswer ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param surveySurveyanswer primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM survey_surveyanswer WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SurveySurveyanswerMySql surveySurveyanswer
 	 */
	public function insert($surveySurveyanswer){
		$sql = 'INSERT INTO survey_surveyanswer (created, modified, user_id, form_id, field_name, field_value) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($surveySurveyanswer->created);
		$sqlQuery->set($surveySurveyanswer->modified);
		$sqlQuery->setNumber($surveySurveyanswer->userId);
		$sqlQuery->setNumber($surveySurveyanswer->formId);
		$sqlQuery->set($surveySurveyanswer->fieldName);
		$sqlQuery->set($surveySurveyanswer->fieldValue);

		$id = $this->executeInsert($sqlQuery);	
		$surveySurveyanswer->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SurveySurveyanswerMySql surveySurveyanswer
 	 */
	public function update($surveySurveyanswer){
		$sql = 'UPDATE survey_surveyanswer SET created = ?, modified = ?, user_id = ?, form_id = ?, field_name = ?, field_value = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($surveySurveyanswer->created);
		$sqlQuery->set($surveySurveyanswer->modified);
		$sqlQuery->setNumber($surveySurveyanswer->userId);
		$sqlQuery->setNumber($surveySurveyanswer->formId);
		$sqlQuery->set($surveySurveyanswer->fieldName);
		$sqlQuery->set($surveySurveyanswer->fieldValue);

		$sqlQuery->setNumber($surveySurveyanswer->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM survey_surveyanswer';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFormId($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE form_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFieldName($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFieldValue($value){
		$sql = 'SELECT * FROM survey_surveyanswer WHERE field_value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFormId($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE form_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFieldName($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE field_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFieldValue($value){
		$sql = 'DELETE FROM survey_surveyanswer WHERE field_value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SurveySurveyanswerMySql 
	 */
	protected function readRow($row){
		$surveySurveyanswer = new SurveySurveyanswer();
		
		$surveySurveyanswer->id = $row['id'];
		$surveySurveyanswer->created = $row['created'];
		$surveySurveyanswer->modified = $row['modified'];
		$surveySurveyanswer->userId = $row['user_id'];
		$surveySurveyanswer->formId = $row['form_id'];
		$surveySurveyanswer->fieldName = $row['field_name'];
		$surveySurveyanswer->fieldValue = $row['field_value'];

		return $surveySurveyanswer;
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
	 * @return SurveySurveyanswerMySql 
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