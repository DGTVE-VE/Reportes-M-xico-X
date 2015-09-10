<?php
/**
 * Class that operate on table 'edxval_video'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EdxvalVideoMySqlDAO implements EdxvalVideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EdxvalVideoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM edxval_video WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM edxval_video';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM edxval_video ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param edxvalVideo primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM edxval_video WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalVideoMySql edxvalVideo
 	 */
	public function insert($edxvalVideo){
		$sql = 'INSERT INTO edxval_video (edx_video_id, client_video_id, duration, created, status) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalVideo->edxVideoId);
		$sqlQuery->set($edxvalVideo->clientVideoId);
		$sqlQuery->set($edxvalVideo->duration);
		$sqlQuery->set($edxvalVideo->created);
		$sqlQuery->set($edxvalVideo->status);

		$id = $this->executeInsert($sqlQuery);	
		$edxvalVideo->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalVideoMySql edxvalVideo
 	 */
	public function update($edxvalVideo){
		$sql = 'UPDATE edxval_video SET edx_video_id = ?, client_video_id = ?, duration = ?, created = ?, status = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalVideo->edxVideoId);
		$sqlQuery->set($edxvalVideo->clientVideoId);
		$sqlQuery->set($edxvalVideo->duration);
		$sqlQuery->set($edxvalVideo->created);
		$sqlQuery->set($edxvalVideo->status);

		$sqlQuery->setNumber($edxvalVideo->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM edxval_video';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByEdxVideoId($value){
		$sql = 'SELECT * FROM edxval_video WHERE edx_video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClientVideoId($value){
		$sql = 'SELECT * FROM edxval_video WHERE client_video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDuration($value){
		$sql = 'SELECT * FROM edxval_video WHERE duration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM edxval_video WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM edxval_video WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByEdxVideoId($value){
		$sql = 'DELETE FROM edxval_video WHERE edx_video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClientVideoId($value){
		$sql = 'DELETE FROM edxval_video WHERE client_video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDuration($value){
		$sql = 'DELETE FROM edxval_video WHERE duration = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM edxval_video WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM edxval_video WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EdxvalVideoMySql 
	 */
	protected function readRow($row){
		$edxvalVideo = new EdxvalVideo();
		
		$edxvalVideo->id = $row['id'];
		$edxvalVideo->edxVideoId = $row['edx_video_id'];
		$edxvalVideo->clientVideoId = $row['client_video_id'];
		$edxvalVideo->duration = $row['duration'];
		$edxvalVideo->created = $row['created'];
		$edxvalVideo->status = $row['status'];

		return $edxvalVideo;
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
	 * @return EdxvalVideoMySql 
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