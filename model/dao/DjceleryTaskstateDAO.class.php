<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface DjceleryTaskstateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DjceleryTaskstate 
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
 	 * @param djceleryTaskstate primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjceleryTaskstate djceleryTaskstate
 	 */
	public function insert($djceleryTaskstate);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjceleryTaskstate djceleryTaskstate
 	 */
	public function update($djceleryTaskstate);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByState($value);

	public function queryByTaskId($value);

	public function queryByName($value);

	public function queryByTstamp($value);

	public function queryByArgs($value);

	public function queryByKwargs($value);

	public function queryByEta($value);

	public function queryByExpires($value);

	public function queryByResult($value);

	public function queryByTraceback($value);

	public function queryByRuntime($value);

	public function queryByRetries($value);

	public function queryByWorkerId($value);

	public function queryByHidden($value);


	public function deleteByState($value);

	public function deleteByTaskId($value);

	public function deleteByName($value);

	public function deleteByTstamp($value);

	public function deleteByArgs($value);

	public function deleteByKwargs($value);

	public function deleteByEta($value);

	public function deleteByExpires($value);

	public function deleteByResult($value);

	public function deleteByTraceback($value);

	public function deleteByRuntime($value);

	public function deleteByRetries($value);

	public function deleteByWorkerId($value);

	public function deleteByHidden($value);


}
?>