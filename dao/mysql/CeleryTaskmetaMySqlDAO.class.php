<?php
/**
 * Class that operate on table 'celery_taskmeta'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CeleryTaskmetaMySqlDAO implements CeleryTaskmetaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CeleryTaskmetaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM celery_taskmeta WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM celery_taskmeta';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM celery_taskmeta ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param celeryTaskmeta primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM celery_taskmeta WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CeleryTaskmetaMySql celeryTaskmeta
 	 */
	public function insert($celeryTaskmeta){
		$sql = 'INSERT INTO celery_taskmeta (task_id, status, result, date_done, traceback, hidden, meta) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($celeryTaskmeta->taskId);
		$sqlQuery->set($celeryTaskmeta->status);
		$sqlQuery->set($celeryTaskmeta->result);
		$sqlQuery->set($celeryTaskmeta->dateDone);
		$sqlQuery->set($celeryTaskmeta->traceback);
		$sqlQuery->setNumber($celeryTaskmeta->hidden);
		$sqlQuery->set($celeryTaskmeta->meta);

		$id = $this->executeInsert($sqlQuery);	
		$celeryTaskmeta->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CeleryTaskmetaMySql celeryTaskmeta
 	 */
	public function update($celeryTaskmeta){
		$sql = 'UPDATE celery_taskmeta SET task_id = ?, status = ?, result = ?, date_done = ?, traceback = ?, hidden = ?, meta = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($celeryTaskmeta->taskId);
		$sqlQuery->set($celeryTaskmeta->status);
		$sqlQuery->set($celeryTaskmeta->result);
		$sqlQuery->set($celeryTaskmeta->dateDone);
		$sqlQuery->set($celeryTaskmeta->traceback);
		$sqlQuery->setNumber($celeryTaskmeta->hidden);
		$sqlQuery->set($celeryTaskmeta->meta);

		$sqlQuery->setNumber($celeryTaskmeta->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM celery_taskmeta';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTaskId($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByResult($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateDone($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE date_done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTraceback($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE traceback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHidden($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMeta($value){
		$sql = 'SELECT * FROM celery_taskmeta WHERE meta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTaskId($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE task_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByResult($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE result = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateDone($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE date_done = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTraceback($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE traceback = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHidden($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE hidden = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMeta($value){
		$sql = 'DELETE FROM celery_taskmeta WHERE meta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CeleryTaskmetaMySql 
	 */
	protected function readRow($row){
		$celeryTaskmeta = new CeleryTaskmeta();
		
		$celeryTaskmeta->id = $row['id'];
		$celeryTaskmeta->taskId = $row['task_id'];
		$celeryTaskmeta->status = $row['status'];
		$celeryTaskmeta->result = $row['result'];
		$celeryTaskmeta->dateDone = $row['date_done'];
		$celeryTaskmeta->traceback = $row['traceback'];
		$celeryTaskmeta->hidden = $row['hidden'];
		$celeryTaskmeta->meta = $row['meta'];

		return $celeryTaskmeta;
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
	 * @return CeleryTaskmetaMySql 
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