<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface PsychometricsPsychometricdataDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return PsychometricsPsychometricdata 
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
 	 * @param psychometricsPsychometricdata primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PsychometricsPsychometricdata psychometricsPsychometricdata
 	 */
	public function insert($psychometricsPsychometricdata);
	
	/**
 	 * Update record in table
 	 *
 	 * @param PsychometricsPsychometricdata psychometricsPsychometricdata
 	 */
	public function update($psychometricsPsychometricdata);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStudentmoduleId($value);

	public function queryByDone($value);

	public function queryByAttempts($value);

	public function queryByChecktimes($value);


	public function deleteByStudentmoduleId($value);

	public function deleteByDone($value);

	public function deleteByAttempts($value);

	public function deleteByChecktimes($value);


}
?>