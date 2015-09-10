<?php
/**
 * Class that operate on table 'wiki_attachment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiAttachmentMySqlDAO implements WikiAttachmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiAttachmentMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_attachment WHERE reusableplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_attachment';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_attachment ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiAttachment primary key
 	 */
	public function delete($reusableplugin_ptr_id){
		$sql = 'DELETE FROM wiki_attachment WHERE reusableplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($reusableplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiAttachmentMySql wikiAttachment
 	 */
	public function insert($wikiAttachment){
		$sql = 'INSERT INTO wiki_attachment (current_revision_id, original_filename) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiAttachment->currentRevisionId);
		$sqlQuery->set($wikiAttachment->originalFilename);

		$id = $this->executeInsert($sqlQuery);	
		$wikiAttachment->reusablepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiAttachmentMySql wikiAttachment
 	 */
	public function update($wikiAttachment){
		$sql = 'UPDATE wiki_attachment SET current_revision_id = ?, original_filename = ? WHERE reusableplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiAttachment->currentRevisionId);
		$sqlQuery->set($wikiAttachment->originalFilename);

		$sqlQuery->setNumber($wikiAttachment->reusablepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_attachment';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCurrentRevisionId($value){
		$sql = 'SELECT * FROM wiki_attachment WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOriginalFilename($value){
		$sql = 'SELECT * FROM wiki_attachment WHERE original_filename = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCurrentRevisionId($value){
		$sql = 'DELETE FROM wiki_attachment WHERE current_revision_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOriginalFilename($value){
		$sql = 'DELETE FROM wiki_attachment WHERE original_filename = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiAttachmentMySql 
	 */
	protected function readRow($row){
		$wikiAttachment = new WikiAttachment();
		
		$wikiAttachment->reusablepluginPtrId = $row['reusableplugin_ptr_id'];
		$wikiAttachment->currentRevisionId = $row['current_revision_id'];
		$wikiAttachment->originalFilename = $row['original_filename'];

		return $wikiAttachment;
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
	 * @return WikiAttachmentMySql 
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