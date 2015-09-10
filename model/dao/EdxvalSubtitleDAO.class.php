<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EdxvalSubtitleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EdxvalSubtitle 
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
 	 * @param edxvalSubtitle primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalSubtitle edxvalSubtitle
 	 */
	public function insert($edxvalSubtitle);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalSubtitle edxvalSubtitle
 	 */
	public function update($edxvalSubtitle);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByVideoId($value);

	public function queryByFmt($value);

	public function queryByLanguage($value);

	public function queryByContent($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByVideoId($value);

	public function deleteByFmt($value);

	public function deleteByLanguage($value);

	public function deleteByContent($value);


}
?>