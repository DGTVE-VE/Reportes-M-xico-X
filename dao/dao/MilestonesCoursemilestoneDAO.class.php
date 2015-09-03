<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface MilestonesCoursemilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MilestonesCoursemilestone 
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
 	 * @param milestonesCoursemilestone primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesCoursemilestone milestonesCoursemilestone
 	 */
	public function insert($milestonesCoursemilestone);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesCoursemilestone milestonesCoursemilestone
 	 */
	public function update($milestonesCoursemilestone);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByCourseId($value);

	public function queryByMilestoneId($value);

	public function queryByMilestoneRelationshipTypeId($value);

	public function queryByActive($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByCourseId($value);

	public function deleteByMilestoneId($value);

	public function deleteByMilestoneRelationshipTypeId($value);

	public function deleteByActive($value);


}
?>