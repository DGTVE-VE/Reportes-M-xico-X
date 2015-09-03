<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface MilestonesMilestonerelationshiptypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MilestonesMilestonerelationshiptype 
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
 	 * @param milestonesMilestonerelationshiptype primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MilestonesMilestonerelationshiptype milestonesMilestonerelationshiptype
 	 */
	public function insert($milestonesMilestonerelationshiptype);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MilestonesMilestonerelationshiptype milestonesMilestonerelationshiptype
 	 */
	public function update($milestonesMilestonerelationshiptype);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByName($value);

	public function queryByDescription($value);

	public function queryByActive($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByName($value);

	public function deleteByDescription($value);

	public function deleteByActive($value);


}
?>