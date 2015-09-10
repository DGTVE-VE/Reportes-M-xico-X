<?php
/**
 * Class that operate on table 'psychometrics_psychometricdata'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class PsychometricsPsychometricdataMySqlDAO implements PsychometricsPsychometricdataDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PsychometricsPsychometricdataMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM psychometrics_psychometricdata WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM psychometrics_psychometricdata';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM psychometrics_psychometricdata ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param psychometricsPsychometricdata primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM psychometrics_psychometricdata WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PsychometricsPsychometricdataMySql psychometricsPsychometricdata
 	 */
	public function insert($psychometricsPsychometricdata){
		$sql = 'INSERT INTO psychometrics_psychometricdata (studentmodule_id, done, attempts, checktimes) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($psychometricsPsychometricdata->studentmoduleId);
		$sqlQuery->setNumber($psychometricsPsychometricdata->done);
		$sqlQuery->setNumber($psychometricsPsychometricdata->attempts);
		$sqlQuery->set($psychometricsPsychometricdata->checktimes);

		$id = $this->executeInsert($sqlQuery);	
		$psychometricsPsychometricdata->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PsychometricsPsychometricdataMySql psychometricsPsychometricdata
 	 */
	public function update($psychometricsPsychometricdata){
		$sql = 'UPDATE psychometrics_psychometricdata SET studentmodule_id = ?, done = ?, attempts = ?, checktimes = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($psychometricsPsychometricdata->studentmoduleId);
		$sqlQuery->setNumber($psychometricsPsychometricdata->done);
		$sqlQuery->setNumber($psychometricsPsychometricdata->attempts);
		$sqlQuery->set($psychometricsPsychometricdata->checktimes);

		$sqlQuery->setNumber($psychometricsPsychometricdata->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM psychometrics_psychometricdata';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStudentmoduleId($value){
		$sql = 'SELECT * FROM psychometrics_psychometricdata WHERE studentmodule_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDone($value){
		$sql = 'SELECT * FROM psychometrics_psychometricdata WHERE done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAttempts($value){
		$sql = 'SELECT * FROM psychometrics_psychometricdata WHERE attempts = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChecktimes($value){
		$sql = 'SELECT * FROM psychometrics_psychometricdata WHERE checktimes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStudentmoduleId($value){
		$sql = 'DELETE FROM psychometrics_psychometricdata WHERE studentmodule_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDone($value){
		$sql = 'DELETE FROM psychometrics_psychometricdata WHERE done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAttempts($value){
		$sql = 'DELETE FROM psychometrics_psychometricdata WHERE attempts = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChecktimes($value){
		$sql = 'DELETE FROM psychometrics_psychometricdata WHERE checktimes = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PsychometricsPsychometricdataMySql 
	 */
	protected function readRow($row){
		$psychometricsPsychometricdata = new PsychometricsPsychometricdata();
		
		$psychometricsPsychometricdata->id = $row['id'];
		$psychometricsPsychometricdata->studentmoduleId = $row['studentmodule_id'];
		$psychometricsPsychometricdata->done = $row['done'];
		$psychometricsPsychometricdata->attempts = $row['attempts'];
		$psychometricsPsychometricdata->checktimes = $row['checktimes'];

		return $psychometricsPsychometricdata;
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
	 * @return PsychometricsPsychometricdataMySql 
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