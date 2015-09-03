<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface MilestonesCoursecontentmilestoneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MilestonesCoursecontentmilestone 
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
 	 * @param milestonesCoursecontentmilestone primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesCoursecontentmilestone milestonesCoursecontentmilestone
 	 */
	public function insert($milestonesCoursecontentmilestone);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesCoursecontentmilestone milestonesCoursecontentmilestone
 	 */
	public function update($milestonesCoursecontentmilestone);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByCourseId($value);

	public function queryByContentId($value);

	public function queryByMilestoneId($value);

	public function queryByMilestoneRelationshipTypeId($value);

	public function queryByActive($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByCourseId($value);

	public function deleteByContentId($value);

	public function deleteByMilestoneId($value);

	public function deleteByMilestoneRelationshipTypeId($value);

	public function deleteByActive($value);


}
?>