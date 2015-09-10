<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAigradingworkflowDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAigradingworkflow 
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
 	 * @param assessmentAigradingworkflow primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAigradingworkflow assessmentAigradingworkflow
 	 */
	public function insert($assessmentAigradingworkflow);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAigradingworkflow assessmentAigradingworkflow
 	 */
	public function update($assessmentAigradingworkflow);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUuid($value);

	public function queryByScheduledAt($value);

	public function queryByCompletedAt($value);

	public function queryBySubmissionUuid($value);

	public function queryByClassifierSetId($value);

	public function queryByAlgorithmId($value);

	public function queryByRubricId($value);

	public function queryByAssessmentId($value);

	public function queryByStudentId($value);

	public function queryByItemId($value);

	public function queryByCourseId($value);

	public function queryByEssayText($value);


	public function deleteByUuid($value);

	public function deleteByScheduledAt($value);

	public function deleteByCompletedAt($value);

	public function deleteBySubmissionUuid($value);

	public function deleteByClassifierSetId($value);

	public function deleteByAlgorithmId($value);

	public function deleteByRubricId($value);

	public function deleteByAssessmentId($value);

	public function deleteByStudentId($value);

	public function deleteByItemId($value);

	public function deleteByCourseId($value);

	public function deleteByEssayText($value);


}
?>