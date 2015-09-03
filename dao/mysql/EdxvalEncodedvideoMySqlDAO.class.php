<?php
/**
 * Class that operate on table 'edxval_encodedvideo'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EdxvalEncodedvideoMySqlDAO implements EdxvalEncodedvideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EdxvalEncodedvideoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM edxval_encodedvideo';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM edxval_encodedvideo ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param edxvalEncodedvideo primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalEncodedvideoMySql edxvalEncodedvideo
 	 */
	public function insert($edxvalEncodedvideo){
		$sql = 'INSERT INTO edxval_encodedvideo (created, modified, url, file_size, bitrate, profile_id, video_id) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalEncodedvideo->created);
		$sqlQuery->set($edxvalEncodedvideo->modified);
		$sqlQuery->set($edxvalEncodedvideo->url);
		$sqlQuery->setNumber($edxvalEncodedvideo->fileSize);
		$sqlQuery->setNumber($edxvalEncodedvideo->bitrate);
		$sqlQuery->setNumber($edxvalEncodedvideo->profileId);
		$sqlQuery->setNumber($edxvalEncodedvideo->videoId);

		$id = $this->executeInsert($sqlQuery);	
		$edxvalEncodedvideo->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalEncodedvideoMySql edxvalEncodedvideo
 	 */
	public function update($edxvalEncodedvideo){
		$sql = 'UPDATE edxval_encodedvideo SET created = ?, modified = ?, url = ?, file_size = ?, bitrate = ?, profile_id = ?, video_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalEncodedvideo->created);
		$sqlQuery->set($edxvalEncodedvideo->modified);
		$sqlQuery->set($edxvalEncodedvideo->url);
		$sqlQuery->setNumber($edxvalEncodedvideo->fileSize);
		$sqlQuery->setNumber($edxvalEncodedvideo->bitrate);
		$sqlQuery->setNumber($edxvalEncodedvideo->profileId);
		$sqlQuery->setNumber($edxvalEncodedvideo->videoId);

		$sqlQuery->setNumber($edxvalEncodedvideo->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM edxval_encodedvideo';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFileSize($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE file_size = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBitrate($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE bitrate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProfileId($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE profile_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVideoId($value){
		$sql = 'SELECT * FROM edxval_encodedvideo WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFileSize($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE file_size = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBitrate($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE bitrate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProfileId($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE profile_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVideoId($value){
		$sql = 'DELETE FROM edxval_encodedvideo WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EdxvalEncodedvideoMySql 
	 */
	protected function readRow($row){
		$edxvalEncodedvideo = new EdxvalEncodedvideo();
		
		$edxvalEncodedvideo->id = $row['id'];
		$edxvalEncodedvideo->created = $row['created'];
		$edxvalEncodedvideo->modified = $row['modified'];
		$edxvalEncodedvideo->url = $row['url'];
		$edxvalEncodedvideo->fileSize = $row['file_size'];
		$edxvalEncodedvideo->bitrate = $row['bitrate'];
		$edxvalEncodedvideo->profileId = $row['profile_id'];
		$edxvalEncodedvideo->videoId = $row['video_id'];

		return $edxvalEncodedvideo;
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
	 * @return EdxvalEncodedvideoMySql 
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