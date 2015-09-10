<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EmbargoCountryaccessruleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return EmbargoCountryaccessrule 
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
 	 * @param embargoCountryaccessrule primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EmbargoCountryaccessrule embargoCountryaccessrule
 	 */
	public function insert($embargoCountryaccessrule);
	
	/**
 	 * Update record in table
 	 *
 	 * @param EmbargoCountryaccessrule embargoCountryaccessrule
 	 */
	public function update($embargoCountryaccessrule);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRuleType($value);

	public function queryByRestrictedCourseId($value);

	public function queryByCountryId($value);


	public function deleteByRuleType($value);

	public function deleteByRestrictedCourseId($value);

	public function deleteByCountryId($value);


}
?>