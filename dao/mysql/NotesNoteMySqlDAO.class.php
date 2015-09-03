<?php
/**
 * Class that operate on table 'notes_note'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class NotesNoteMySqlDAO implements NotesNoteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return NotesNoteMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM notes_note WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM notes_note';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM notes_note ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param notesNote primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM notes_note WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotesNoteMySql notesNote
 	 */
	public function insert($notesNote){
		$sql = 'INSERT INTO notes_note (user_id, course_id, uri, text, quote, range_start, range_start_offset, range_end, range_end_offset, tags, created, updated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notesNote->userId);
		$sqlQuery->set($notesNote->courseId);
		$sqlQuery->set($notesNote->uri);
		$sqlQuery->set($notesNote->text);
		$sqlQuery->set($notesNote->quote);
		$sqlQuery->set($notesNote->rangeStart);
		$sqlQuery->setNumber($notesNote->rangeStartOffset);
		$sqlQuery->set($notesNote->rangeEnd);
		$sqlQuery->setNumber($notesNote->rangeEndOffset);
		$sqlQuery->set($notesNote->tags);
		$sqlQuery->set($notesNote->created);
		$sqlQuery->set($notesNote->updated);

		$id = $this->executeInsert($sqlQuery);	
		$notesNote->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotesNoteMySql notesNote
 	 */
	public function update($notesNote){
		$sql = 'UPDATE notes_note SET user_id = ?, course_id = ?, uri = ?, text = ?, quote = ?, range_start = ?, range_start_offset = ?, range_end = ?, range_end_offset = ?, tags = ?, created = ?, updated = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($notesNote->userId);
		$sqlQuery->set($notesNote->courseId);
		$sqlQuery->set($notesNote->uri);
		$sqlQuery->set($notesNote->text);
		$sqlQuery->set($notesNote->quote);
		$sqlQuery->set($notesNote->rangeStart);
		$sqlQuery->setNumber($notesNote->rangeStartOffset);
		$sqlQuery->set($notesNote->rangeEnd);
		$sqlQuery->setNumber($notesNote->rangeEndOffset);
		$sqlQuery->set($notesNote->tags);
		$sqlQuery->set($notesNote->created);
		$sqlQuery->set($notesNote->updated);

		$sqlQuery->setNumber($notesNote->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM notes_note';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM notes_note WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM notes_note WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUri($value){
		$sql = 'SELECT * FROM notes_note WHERE uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByText($value){
		$sql = 'SELECT * FROM notes_note WHERE text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuote($value){
		$sql = 'SELECT * FROM notes_note WHERE quote = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRangeStart($value){
		$sql = 'SELECT * FROM notes_note WHERE range_start = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRangeStartOffset($value){
		$sql = 'SELECT * FROM notes_note WHERE range_start_offset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRangeEnd($value){
		$sql = 'SELECT * FROM notes_note WHERE range_end = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRangeEndOffset($value){
		$sql = 'SELECT * FROM notes_note WHERE range_end_offset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTags($value){
		$sql = 'SELECT * FROM notes_note WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM notes_note WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdated($value){
		$sql = 'SELECT * FROM notes_note WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM notes_note WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM notes_note WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUri($value){
		$sql = 'DELETE FROM notes_note WHERE uri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByText($value){
		$sql = 'DELETE FROM notes_note WHERE text = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuote($value){
		$sql = 'DELETE FROM notes_note WHERE quote = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRangeStart($value){
		$sql = 'DELETE FROM notes_note WHERE range_start = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRangeStartOffset($value){
		$sql = 'DELETE FROM notes_note WHERE range_start_offset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRangeEnd($value){
		$sql = 'DELETE FROM notes_note WHERE range_end = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRangeEndOffset($value){
		$sql = 'DELETE FROM notes_note WHERE range_end_offset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTags($value){
		$sql = 'DELETE FROM notes_note WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM notes_note WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdated($value){
		$sql = 'DELETE FROM notes_note WHERE updated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return NotesNoteMySql 
	 */
	protected function readRow($row){
		$notesNote = new NotesNote();
		
		$notesNote->id = $row['id'];
		$notesNote->userId = $row['user_id'];
		$notesNote->courseId = $row['course_id'];
		$notesNote->uri = $row['uri'];
		$notesNote->text = $row['text'];
		$notesNote->quote = $row['quote'];
		$notesNote->rangeStart = $row['range_start'];
		$notesNote->rangeStartOffset = $row['range_start_offset'];
		$notesNote->rangeEnd = $row['range_end'];
		$notesNote->rangeEndOffset = $row['range_end_offset'];
		$notesNote->tags = $row['tags'];
		$notesNote->created = $row['created'];
		$notesNote->updated = $row['updated'];

		return $notesNote;
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
	 * @return NotesNoteMySql 
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