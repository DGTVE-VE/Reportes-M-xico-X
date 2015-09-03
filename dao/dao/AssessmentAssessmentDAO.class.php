<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAssessmentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAssessment 
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
 	 * @param assessmentAssessment primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAssessment assessmentAssessment
 	 */
	public function insert($assessmentAssessment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAssessment assessmentAssessment
 	 */
	public function update($assessmentAssessment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubmissionUuid($value);

	public function queryByRubricId($value);

	public function queryByScoredAt($value);

	public function queryByScorerId($value);

	public function queryByScoreType($value);

	public function queryByFeedback($value);


	public function deleteBySubmissionUuid($value);

	public function deleteByRubricId($value);

	public function deleteByScoredAt($value);

	public function deleteByScorerId($value);

	public function deleteByScoreType($value);

	public function deleteByFeedback($value);


}
?>