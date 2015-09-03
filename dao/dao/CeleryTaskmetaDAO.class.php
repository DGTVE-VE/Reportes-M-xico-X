<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CeleryTaskmetaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CeleryTaskmeta 
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
 	 * @param celeryTaskmeta primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CeleryTaskmeta celeryTaskmeta
 	 */
	public function insert($celeryTaskmeta);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CeleryTaskmeta celeryTaskmeta
 	 */
	public function update($celeryTaskmeta);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTaskId($value);

	public function queryByStatus($value);

	public function queryByResult($value);

	public function queryByDateDone($value);

	public function queryByTraceback($value);

	public function queryByHidden($value);

	public function queryByMeta($value);


	public function deleteByTaskId($value);

	public function deleteByStatus($value);

	public function deleteByResult($value);

	public function deleteByDateDone($value);

	public function deleteByTraceback($value);

	public function deleteByHidden($value);

	public function deleteByMeta($value);


}
?>