<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SurveySurveyformDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SurveySurveyform 
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
 	 * @param surveySurveyform primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SurveySurveyform surveySurveyform
 	 */
	public function insert($surveySurveyform);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SurveySurveyform surveySurveyform
 	 */
	public function update($surveySurveyform);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByName($value);

	public function queryByForm($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByName($value);

	public function deleteByForm($value);


}
?>