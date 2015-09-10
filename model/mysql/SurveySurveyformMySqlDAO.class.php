<?php
/**
 * Class that operate on table 'survey_surveyform'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SurveySurveyformMySqlDAO implements SurveySurveyformDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SurveySurveyformMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM survey_surveyform WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM survey_surveyform';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM survey_surveyform ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param surveySurveyform primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM survey_surveyform WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SurveySurveyformMySql surveySurveyform
 	 */
	public function insert($surveySurveyform){
		$sql = 'INSERT INTO survey_surveyform (created, modified, name, form) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($surveySurveyform->created);
		$sqlQuery->set($surveySurveyform->modified);
		$sqlQuery->set($surveySurveyform->name);
		$sqlQuery->set($surveySurveyform->form);

		$id = $this->executeInsert($sqlQuery);	
		$surveySurveyform->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SurveySurveyformMySql surveySurveyform
 	 */
	public function update($surveySurveyform){
		$sql = 'UPDATE survey_surveyform SET created = ?, modified = ?, name = ?, form = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($surveySurveyform->created);
		$sqlQuery->set($surveySurveyform->modified);
		$sqlQuery->set($surveySurveyform->name);
		$sqlQuery->set($surveySurveyform->form);

		$sqlQuery->setNumber($surveySurveyform->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM survey_surveyform';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM survey_surveyform WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM survey_surveyform WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM survey_surveyform WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByForm($value){
		$sql = 'SELECT * FROM survey_surveyform WHERE form = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM survey_surveyform WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM survey_surveyform WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM survey_surveyform WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByForm($value){
		$sql = 'DELETE FROM survey_surveyform WHERE form = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SurveySurveyformMySql 
	 */
	protected function readRow($row){
		$surveySurveyform = new SurveySurveyform();
		
		$surveySurveyform->id = $row['id'];
		$surveySurveyform->created = $row['created'];
		$surveySurveyform->modified = $row['modified'];
		$surveySurveyform->name = $row['name'];
		$surveySurveyform->form = $row['form'];

		return $surveySurveyform;
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
	 * @return SurveySurveyformMySql 
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