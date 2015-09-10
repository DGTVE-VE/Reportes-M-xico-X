<?php
/**
 * Class that operate on table 'bulk_email_courseemail'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class BulkEmailCourseemailMySqlDAO implements BulkEmailCourseemailDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BulkEmailCourseemailMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bulk_email_courseemail';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bulk_email_courseemail ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bulkEmailCourseemail primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BulkEmailCourseemailMySql bulkEmailCourseemail
 	 */
	public function insert($bulkEmailCourseemail){
		$sql = 'INSERT INTO bulk_email_courseemail (sender_id, slug, subject, html_message, created, modified, course_id, to_option, text_message, template_name, from_addr) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($bulkEmailCourseemail->senderId);
		$sqlQuery->set($bulkEmailCourseemail->slug);
		$sqlQuery->set($bulkEmailCourseemail->subject);
		$sqlQuery->set($bulkEmailCourseemail->htmlMessage);
		$sqlQuery->set($bulkEmailCourseemail->created);
		$sqlQuery->set($bulkEmailCourseemail->modified);
		$sqlQuery->set($bulkEmailCourseemail->courseId);
		$sqlQuery->set($bulkEmailCourseemail->toOption);
		$sqlQuery->set($bulkEmailCourseemail->textMessage);
		$sqlQuery->set($bulkEmailCourseemail->templateName);
		$sqlQuery->set($bulkEmailCourseemail->fromAddr);

		$id = $this->executeInsert($sqlQuery);	
		$bulkEmailCourseemail->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BulkEmailCourseemailMySql bulkEmailCourseemail
 	 */
	public function update($bulkEmailCourseemail){
		$sql = 'UPDATE bulk_email_courseemail SET sender_id = ?, slug = ?, subject = ?, html_message = ?, created = ?, modified = ?, course_id = ?, to_option = ?, text_message = ?, template_name = ?, from_addr = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($bulkEmailCourseemail->senderId);
		$sqlQuery->set($bulkEmailCourseemail->slug);
		$sqlQuery->set($bulkEmailCourseemail->subject);
		$sqlQuery->set($bulkEmailCourseemail->htmlMessage);
		$sqlQuery->set($bulkEmailCourseemail->created);
		$sqlQuery->set($bulkEmailCourseemail->modified);
		$sqlQuery->set($bulkEmailCourseemail->courseId);
		$sqlQuery->set($bulkEmailCourseemail->toOption);
		$sqlQuery->set($bulkEmailCourseemail->textMessage);
		$sqlQuery->set($bulkEmailCourseemail->templateName);
		$sqlQuery->set($bulkEmailCourseemail->fromAddr);

		$sqlQuery->setNumber($bulkEmailCourseemail->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bulk_email_courseemail';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySenderId($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE sender_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySlug($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubject($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE subject = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHtmlMessage($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE html_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByToOption($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE to_option = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTextMessage($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE text_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTemplateName($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE template_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFromAddr($value){
		$sql = 'SELECT * FROM bulk_email_courseemail WHERE from_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySenderId($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE sender_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySlug($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubject($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE subject = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHtmlMessage($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE html_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByToOption($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE to_option = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTextMessage($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE text_message = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTemplateName($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE template_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFromAddr($value){
		$sql = 'DELETE FROM bulk_email_courseemail WHERE from_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BulkEmailCourseemailMySql 
	 */
	protected function readRow($row){
		$bulkEmailCourseemail = new BulkEmailCourseemail();
		
		$bulkEmailCourseemail->id = $row['id'];
		$bulkEmailCourseemail->senderId = $row['sender_id'];
		$bulkEmailCourseemail->slug = $row['slug'];
		$bulkEmailCourseemail->subject = $row['subject'];
		$bulkEmailCourseemail->htmlMessage = $row['html_message'];
		$bulkEmailCourseemail->created = $row['created'];
		$bulkEmailCourseemail->modified = $row['modified'];
		$bulkEmailCourseemail->courseId = $row['course_id'];
		$bulkEmailCourseemail->toOption = $row['to_option'];
		$bulkEmailCourseemail->textMessage = $row['text_message'];
		$bulkEmailCourseemail->templateName = $row['template_name'];
		$bulkEmailCourseemail->fromAddr = $row['from_addr'];

		return $bulkEmailCourseemail;
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
	 * @return BulkEmailCourseemailMySql 
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