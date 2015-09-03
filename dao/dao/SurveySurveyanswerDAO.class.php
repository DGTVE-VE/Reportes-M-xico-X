<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SurveySurveyanswerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SurveySurveyanswer 
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
 	 * @param surveySurveyanswer primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SurveySurveyanswer surveySurveyanswer
 	 */
	public function insert($surveySurveyanswer);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SurveySurveyanswer surveySurveyanswer
 	 */
	public function update($surveySurveyanswer);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByUserId($value);

	public function queryByFormId($value);

	public function queryByFieldName($value);

	public function queryByFieldValue($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByUserId($value);

	public function deleteByFormId($value);

	public function deleteByFieldName($value);

	public function deleteByFieldValue($value);


}
?>