<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface WikiRevisionpluginrevisionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WikiRevisionpluginrevision 
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
 	 * @param wikiRevisionpluginrevision primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiRevisionpluginrevision wikiRevisionpluginrevision
 	 */
	public function insert($wikiRevisionpluginrevision);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiRevisionpluginrevision wikiRevisionpluginrevision
 	 */
	public function update($wikiRevisionpluginrevision);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRevisionNumber($value);

	public function queryByUserMessage($value);

	public function queryByAutomaticLog($value);

	public function queryByIpAddress($value);

	public function queryByUserId($value);

	public function queryByModified($value);

	public function queryByCreated($value);

	public function queryByPreviousRevisionId($value);

	public function queryByDeleted($value);

	public function queryByLocked($value);

	public function queryByPluginId($value);


	public function deleteByRevisionNumber($value);

	public function deleteByUserMessage($value);

	public function deleteByAutomaticLog($value);

	public function deleteByIpAddress($value);

	public function deleteByUserId($value);

	public function deleteByModified($value);

	public function deleteByCreated($value);

	public function deleteByPreviousRevisionId($value);

	public function deleteByDeleted($value);

	public function deleteByLocked($value);

	public function deleteByPluginId($value);


}
?>