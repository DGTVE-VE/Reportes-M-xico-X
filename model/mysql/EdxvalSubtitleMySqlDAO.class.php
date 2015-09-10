<?php
/**
 * Class that operate on table 'edxval_subtitle'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EdxvalSubtitleMySqlDAO implements EdxvalSubtitleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EdxvalSubtitleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM edxval_subtitle WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM edxval_subtitle';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM edxval_subtitle ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param edxvalSubtitle primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM edxval_subtitle WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalSubtitleMySql edxvalSubtitle
 	 */
	public function insert($edxvalSubtitle){
		$sql = 'INSERT INTO edxval_subtitle (created, modified, video_id, fmt, language, content) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalSubtitle->created);
		$sqlQuery->set($edxvalSubtitle->modified);
		$sqlQuery->setNumber($edxvalSubtitle->videoId);
		$sqlQuery->set($edxvalSubtitle->fmt);
		$sqlQuery->set($edxvalSubtitle->language);
		$sqlQuery->set($edxvalSubtitle->content);

		$id = $this->executeInsert($sqlQuery);	
		$edxvalSubtitle->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalSubtitleMySql edxvalSubtitle
 	 */
	public function update($edxvalSubtitle){
		$sql = 'UPDATE edxval_subtitle SET created = ?, modified = ?, video_id = ?, fmt = ?, language = ?, content = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalSubtitle->created);
		$sqlQuery->set($edxvalSubtitle->modified);
		$sqlQuery->setNumber($edxvalSubtitle->videoId);
		$sqlQuery->set($edxvalSubtitle->fmt);
		$sqlQuery->set($edxvalSubtitle->language);
		$sqlQuery->set($edxvalSubtitle->content);

		$sqlQuery->setNumber($edxvalSubtitle->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM edxval_subtitle';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVideoId($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFmt($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE fmt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLanguage($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE language = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContent($value){
		$sql = 'SELECT * FROM edxval_subtitle WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVideoId($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFmt($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE fmt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLanguage($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE language = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContent($value){
		$sql = 'DELETE FROM edxval_subtitle WHERE content = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EdxvalSubtitleMySql 
	 */
	protected function readRow($row){
		$edxvalSubtitle = new EdxvalSubtitle();
		
		$edxvalSubtitle->id = $row['id'];
		$edxvalSubtitle->created = $row['created'];
		$edxvalSubtitle->modified = $row['modified'];
		$edxvalSubtitle->videoId = $row['video_id'];
		$edxvalSubtitle->fmt = $row['fmt'];
		$edxvalSubtitle->language = $row['language'];
		$edxvalSubtitle->content = $row['content'];

		return $edxvalSubtitle;
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
	 * @return EdxvalSubtitleMySql 
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