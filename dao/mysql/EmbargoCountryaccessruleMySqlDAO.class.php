<?php
/**
 * Class that operate on table 'embargo_countryaccessrule'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EmbargoCountryaccessruleMySqlDAO implements EmbargoCountryaccessruleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EmbargoCountryaccessruleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM embargo_countryaccessrule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM embargo_countryaccessrule';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM embargo_countryaccessrule ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param embargoCountryaccessrule primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM embargo_countryaccessrule WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoCountryaccessruleMySql embargoCountryaccessrule
 	 */
	public function insert($embargoCountryaccessrule){
		$sql = 'INSERT INTO embargo_countryaccessrule (rule_type, restricted_course_id, country_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoCountryaccessrule->ruleType);
		$sqlQuery->setNumber($embargoCountryaccessrule->restrictedCourseId);
		$sqlQuery->setNumber($embargoCountryaccessrule->countryId);

		$id = $this->executeInsert($sqlQuery);	
		$embargoCountryaccessrule->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoCountryaccessruleMySql embargoCountryaccessrule
 	 */
	public function update($embargoCountryaccessrule){
		$sql = 'UPDATE embargo_countryaccessrule SET rule_type = ?, restricted_course_id = ?, country_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($embargoCountryaccessrule->ruleType);
		$sqlQuery->setNumber($embargoCountryaccessrule->restrictedCourseId);
		$sqlQuery->setNumber($embargoCountryaccessrule->countryId);

		$sqlQuery->setNumber($embargoCountryaccessrule->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM embargo_countryaccessrule';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRuleType($value){
		$sql = 'SELECT * FROM embargo_countryaccessrule WHERE rule_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRestrictedCourseId($value){
		$sql = 'SELECT * FROM embargo_countryaccessrule WHERE restricted_course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCountryId($value){
		$sql = 'SELECT * FROM embargo_countryaccessrule WHERE country_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRuleType($value){
		$sql = 'DELETE FROM embargo_countryaccessrule WHERE rule_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRestrictedCourseId($value){
		$sql = 'DELETE FROM embargo_countryaccessrule WHERE restricted_course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCountryId($value){
		$sql = 'DELETE FROM embargo_countryaccessrule WHERE country_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EmbargoCountryaccessruleMySql 
	 */
	protected function readRow($row){
		$embargoCountryaccessrule = new EmbargoCountryaccessrule();
		
		$embargoCountryaccessrule->id = $row['id'];
		$embargoCountryaccessrule->ruleType = $row['rule_type'];
		$embargoCountryaccessrule->restrictedCourseId = $row['restricted_course_id'];
		$embargoCountryaccessrule->countryId = $row['country_id'];

		return $embargoCountryaccessrule;
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
	 * @return EmbargoCountryaccessruleMySql 
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