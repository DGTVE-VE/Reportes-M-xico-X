<?php
/**
 * Class that operate on table 'celery_tasksetmeta'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CeleryTasksetmetaMySqlDAO implements CeleryTasksetmetaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CeleryTasksetmetaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM celery_tasksetmeta WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM celery_tasksetmeta';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM celery_tasksetmeta ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param celeryTasksetmeta primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM celery_tasksetmeta WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CeleryTasksetmetaMySql celeryTasksetmeta
 	 */
	public function insert($celeryTasksetmeta){
		$sql = 'INSERT INTO celery_tasksetmeta (taskset_id, result, date_done, hidden) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($celeryTasksetmeta->tasksetId);
		$sqlQuery->set($celeryTasksetmeta->result);
		$sqlQuery->set($celeryTasksetmeta->dateDone);
		$sqlQuery->setNumber($celeryTasksetmeta->hidden);

		$id = $this->executeInsert($sqlQuery);	
		$celeryTasksetmeta->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CeleryTasksetmetaMySql celeryTasksetmeta
 	 */
	public function update($celeryTasksetmeta){
		$sql = 'UPDATE celery_tasksetmeta SET taskset_id = ?, result = ?, date_done = ?, hidden = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($celeryTasksetmeta->tasksetId);
		$sqlQuery->set($celeryTasksetmeta->result);
		$sqlQuery->set($celeryTasksetmeta->dateDone);
		$sqlQuery->setNumber($celeryTasksetmeta->hidden);

		$sqlQuery->setNumber($celeryTasksetmeta->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM celery_tasksetmeta';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTasksetId($value){
		$sql = 'SELECT * FROM celery_tasksetmeta WHERE taskset_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByResult($value){
		$sql = 'SELECT * FROM celery_tasksetmeta WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateDone($value){
		$sql = 'SELECT * FROM celery_tasksetmeta WHERE date_done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHidden($value){
		$sql = 'SELECT * FROM celery_tasksetmeta WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTasksetId($value){
		$sql = 'DELETE FROM celery_tasksetmeta WHERE taskset_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByResult($value){
		$sql = 'DELETE FROM celery_tasksetmeta WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateDone($value){
		$sql = 'DELETE FROM celery_tasksetmeta WHERE date_done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHidden($value){
		$sql = 'DELETE FROM celery_tasksetmeta WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CeleryTasksetmetaMySql 
	 */
	protected function readRow($row){
		$celeryTasksetmeta = new CeleryTasksetmeta();
		
		$celeryTasksetmeta->id = $row['id'];
		$celeryTasksetmeta->tasksetId = $row['taskset_id'];
		$celeryTasksetmeta->result = $row['result'];
		$celeryTasksetmeta->dateDone = $row['date_done'];
		$celeryTasksetmeta->hidden = $row['hidden'];

		return $celeryTasksetmeta;
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
	 * @return CeleryTasksetmetaMySql 
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