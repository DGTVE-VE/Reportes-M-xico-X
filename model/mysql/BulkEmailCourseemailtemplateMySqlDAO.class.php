<?php
/**
 * Class that operate on table 'bulk_email_courseemailtemplate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class BulkEmailCourseemailtemplateMySqlDAO implements BulkEmailCourseemailtemplateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BulkEmailCourseemailtemplateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bulkEmailCourseemailtemplate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM bulk_email_courseemailtemplate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseemailtemplateMySql bulkEmailCourseemailtemplate
 	 */
	public function insert($bulkEmailCourseemailtemplate){
		$sql = 'INSERT INTO bulk_email_courseemailtemplate (html_template, plain_template, name) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bulkEmailCourseemailtemplate->htmlTemplate);
		$sqlQuery->set($bulkEmailCourseemailtemplate->plainTemplate);
		$sqlQuery->set($bulkEmailCourseemailtemplate->name);

		$id = $this->executeInsert($sqlQuery);	
		$bulkEmailCourseemailtemplate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseemailtemplateMySql bulkEmailCourseemailtemplate
 	 */
	public function update($bulkEmailCourseemailtemplate){
		$sql = 'UPDATE bulk_email_courseemailtemplate SET html_template = ?, plain_template = ?, name = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bulkEmailCourseemailtemplate->htmlTemplate);
		$sqlQuery->set($bulkEmailCourseemailtemplate->plainTemplate);
		$sqlQuery->set($bulkEmailCourseemailtemplate->name);

		$sqlQuery->setNumber($bulkEmailCourseemailtemplate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bulk_email_courseemailtemplate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByHtmlTemplate($value){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate WHERE html_template = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPlainTemplate($value){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate WHERE plain_template = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM bulk_email_courseemailtemplate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByHtmlTemplate($value){
		$sql = 'DELETE FROM bulk_email_courseemailtemplate WHERE html_template = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPlainTemplate($value){
		$sql = 'DELETE FROM bulk_email_courseemailtemplate WHERE plain_template = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM bulk_email_courseemailtemplate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BulkEmailCourseemailtemplateMySql 
	 */
	protected function readRow($row){
		$bulkEmailCourseemailtemplate = new BulkEmailCourseemailtemplate();
		
		$bulkEmailCourseemailtemplate->id = $row['id'];
		$bulkEmailCourseemailtemplate->htmlTemplate = $row['html_template'];
		$bulkEmailCourseemailtemplate->plainTemplate = $row['plain_template'];
		$bulkEmailCourseemailtemplate->name = $row['name'];

		return $bulkEmailCourseemailtemplate;
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
	 * @return BulkEmailCourseemailtemplateMySql 
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