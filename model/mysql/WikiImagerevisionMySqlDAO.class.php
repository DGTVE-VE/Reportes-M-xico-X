<?php
/**
 * Class that operate on table 'wiki_imagerevision'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiImagerevisionMySqlDAO implements WikiImagerevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiImagerevisionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_imagerevision WHERE revisionpluginrevision_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_imagerevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_imagerevision ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiImagerevision primary key
 	 */
	public function delete($revisionpluginrevision_ptr_id){
		$sql = 'DELETE FROM wiki_imagerevision WHERE revisionpluginrevision_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($revisionpluginrevision_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiImagerevisionMySql wikiImagerevision
 	 */
	public function insert($wikiImagerevision){
		$sql = 'INSERT INTO wiki_imagerevision (image, width, height) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wikiImagerevision->image);
		$sqlQuery->set($wikiImagerevision->width);
		$sqlQuery->set($wikiImagerevision->height);

		$id = $this->executeInsert($sqlQuery);	
		$wikiImagerevision->revisionpluginrevisionPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiImagerevisionMySql wikiImagerevision
 	 */
	public function update($wikiImagerevision){
		$sql = 'UPDATE wiki_imagerevision SET image = ?, width = ?, height = ? WHERE revisionpluginrevision_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($wikiImagerevision->image);
		$sqlQuery->set($wikiImagerevision->width);
		$sqlQuery->set($wikiImagerevision->height);

		$sqlQuery->setNumber($wikiImagerevision->revisionpluginrevisionPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_imagerevision';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByImage($value){
		$sql = 'SELECT * FROM wiki_imagerevision WHERE image = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWidth($value){
		$sql = 'SELECT * FROM wiki_imagerevision WHERE width = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHeight($value){
		$sql = 'SELECT * FROM wiki_imagerevision WHERE height = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByImage($value){
		$sql = 'DELETE FROM wiki_imagerevision WHERE image = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWidth($value){
		$sql = 'DELETE FROM wiki_imagerevision WHERE width = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHeight($value){
		$sql = 'DELETE FROM wiki_imagerevision WHERE height = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiImagerevisionMySql 
	 */
	protected function readRow($row){
		$wikiImagerevision = new WikiImagerevision();
		
		$wikiImagerevision->revisionpluginrevisionPtrId = $row['revisionpluginrevision_ptr_id'];
		$wikiImagerevision->image = $row['image'];
		$wikiImagerevision->width = $row['width'];
		$wikiImagerevision->height = $row['height'];

		return $wikiImagerevision;
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
	 * @return WikiImagerevisionMySql 
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