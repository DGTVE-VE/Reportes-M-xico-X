<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface MilestonesUsermilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MilestonesUsermilestone 
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
 	 * @param milestonesUsermilestone primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesUsermilestone milestonesUsermilestone
 	 */
	public function insert($milestonesUsermilestone);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesUsermilestone milestonesUsermilestone
 	 */
	public function update($milestonesUsermilestone);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByUserId($value);

	public function queryByMilestoneId($value);

	public function queryBySource($value);

	public function queryByCollected($value);

	public function queryByActive($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByUserId($value);

	public function deleteByMilestoneId($value);

	public function deleteBySource($value);

	public function deleteByCollected($value);

	public function deleteByActive($value);


}
?>