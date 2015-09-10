<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface NotesNoteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return NotesNote 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param notesNote primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param NotesNote notesNote
 	 */
	public function insert($notesNote);
	
	/**
 	 * Update record in table
 	 *
 	 * @param NotesNote notesNote
 	 */
	public function update($notesNote);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCourseId($value);

	public function queryByUri($value);

	public function queryByText($value);

	public function queryByQuote($value);

	public function queryByRangeStart($value);

	public function queryByRangeStartOffset($value);

	public function queryByRangeEnd($value);

	public function queryByRangeEndOffset($value);

	public function queryByTags($value);

	public function queryByCreated($value);

	public function queryByUpdated($value);


	public function deleteByUserId($value);

	public function deleteByCourseId($value);

	public function deleteByUri($value);

	public function deleteByText($value);

	public function deleteByQuote($value);

	public function deleteByRangeStart($value);

	public function deleteByRangeStartOffset($value);

	public function deleteByRangeEnd($value);

	public function deleteByRangeEndOffset($value);

	public function deleteByTags($value);

	public function deleteByCreated($value);

	public function deleteByUpdated($value);


}
?>