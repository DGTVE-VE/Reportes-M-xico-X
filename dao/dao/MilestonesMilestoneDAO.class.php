<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface MilestonesMilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MilestonesMilestone 
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
 	 * @param milestonesMilestone primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesMilestone milestonesMilestone
 	 */
	public function insert($milestonesMilestone);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesMilestone milestonesMilestone
 	 */
	public function update($milestonesMilestone);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByNamespace($value);

	public function queryByName($value);

	public function queryByDisplayName($value);

	public function queryByDescription($value);

	public function queryByActive($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByNamespace($value);

	public function deleteByName($value);

	public function deleteByDisplayName($value);

	public function deleteByDescription($value);

	public function deleteByActive($value);


}
?>