<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface InstructorTaskInstructortaskDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return InstructorTaskInstructortask 
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
 	 * @param instructorTaskInstructortask primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param InstructorTaskInstructortask instructorTaskInstructortask
 	 */
	public function insert($instructorTaskInstructortask);
	
	/**
 	 * Update record in table
 	 *
 	 * @param InstructorTaskInstructortask instructorTaskInstructortask
 	 */
	public function update($instructorTaskInstructortask);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaskType($value);

	public function queryByCourseId($value);

	public function queryByTaskKey($value);

	public function queryByTaskInput($value);

	public function queryByTaskId($value);

	public function queryByTaskState($value);

	public function queryByTaskOutput($value);

	public function queryByRequesterId($value);

	public function queryByCreated($value);

	public function queryByUpdated($value);

	public function queryBySubtasks($value);


	public function deleteByTaskType($value);

	public function deleteByCourseId($value);

	public function deleteByTaskKey($value);

	public function deleteByTaskInput($value);

	public function deleteByTaskId($value);

	public function deleteByTaskState($value);

	public function deleteByTaskOutput($value);

	public function deleteByRequesterId($value);

	public function deleteByCreated($value);

	public function deleteByUpdated($value);

	public function deleteBySubtasks($value);


}
?>