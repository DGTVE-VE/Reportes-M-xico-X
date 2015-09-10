<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SouthMigrationhistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SouthMigrationhistory 
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
 	 * @param southMigrationhistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SouthMigrationhistory southMigrationhistory
 	 */
	public function insert($southMigrationhistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SouthMigrationhistory southMigrationhistory
 	 */
	public function update($southMigrationhistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAppName($value);

	public function queryByMigration($value);

	public function queryByApplied($value);


	public function deleteByAppName($value);

	public function deleteByMigration($value);

	public function deleteByApplied($value);


}
?>