<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AssessmentAitrainingworkflowTrainingExamplesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AssessmentAitrainingworkflowTrainingExamples 
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
 	 * @param assessmentAitrainingworkflowTrainingExample primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AssessmentAitrainingworkflowTrainingExamples assessmentAitrainingworkflowTrainingExample
 	 */
	public function insert($assessmentAitrainingworkflowTrainingExample);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AssessmentAitrainingworkflowTrainingExamples assessmentAitrainingworkflowTrainingExample
 	 */
	public function update($assessmentAitrainingworkflowTrainingExample);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAitrainingworkflowId($value);

	public function queryByTrainingexampleId($value);


	public function deleteByAitrainingworkflowId($value);

	public function deleteByTrainingexampleId($value);


}
?>