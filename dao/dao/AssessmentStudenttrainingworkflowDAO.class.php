<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentStudenttrainingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentStudenttrainingworkflow 
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
 	 * @param assessmentStudenttrainingworkflow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentStudenttrainingworkflow assessmentStudenttrainingworkflow
 	 */
	public function insert($assessmentStudenttrainingworkflow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentStudenttrainingworkflow assessmentStudenttrainingworkflow
 	 */
	public function update($assessmentStudenttrainingworkflow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubmissionUuid($value);

	public function queryByStudentId($value);

	public function queryByItemId($value);

	public function queryByCourseId($value);


	public function deleteBySubmissionUuid($value);

	public function deleteByStudentId($value);

	public function deleteByItemId($value);

	public function deleteByCourseId($value);


}
?>