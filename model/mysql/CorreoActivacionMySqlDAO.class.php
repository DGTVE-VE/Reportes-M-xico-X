<?php
/**
 * Class that operate on table 'assessment_aiclassifier'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CorreoActivacionMySqlDAO implements CorreoActivacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CorreoActivacionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM correo_activacion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM correo_activacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM correo_activacion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param correoactivacion primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM correo_activacion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CorreoActivacionMySql correoactivacion
 	 */
	public function insert($correoActivacion){
            //print_r($correoActivacion);
		$sql = 'INSERT INTO correo_activacion (correo, hash) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);	
		$sqlQuery->set($correoActivacion->correo);
		$sqlQuery->set($correoActivacion->hash);
		$id = $this->executeInsert($sqlQuery);	
		$correoActivacion->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAiclassifierMySql assessmentAiclassifier
 	 */
	public function update($correoActivacion){
		$sql = 'UPDATE correo_activacion SET correo = ?, hash = ? WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($correoActivacion->correo);
		$sqlQuery->set($correoActivacion->hash);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM correo_activacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM correo_activacion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHash($value){
		$sql = 'SELECT * FROM correo_activacion WHERE hash = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function deleteByCorreo($value){
		$sql = 'DELETE FROM correo_activacion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHash($value){
		$sql = 'DELETE FROM correo_activacion WHERE hash = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	/**
	 * Read row
	 *
	 * @return AssessmentAiclassifierMySql 
	 */
	protected function readRow($row){
		$correoActivacion = new AssessmentAiclassifier();
		
		$correoActivacion->correo = $row['correo'];
		$correoActivacion->hash = $row['hash'];

		return $correoActivacion;
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
	 * @return AssessmentAiclassifierMySql 
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