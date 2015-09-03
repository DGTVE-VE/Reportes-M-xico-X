<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CeleryTasksetmetaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CeleryTasksetmeta 
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
 	 * @param celeryTasksetmeta primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CeleryTasksetmeta celeryTasksetmeta
 	 */
	public function insert($celeryTasksetmeta);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CeleryTasksetmeta celeryTasksetmeta
 	 */
	public function update($celeryTasksetmeta);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTasksetId($value);

	public function queryByResult($value);

	public function queryByDateDone($value);

	public function queryByHidden($value);


	public function deleteByTasksetId($value);

	public function deleteByResult($value);

	public function deleteByDateDone($value);

	public function deleteByHidden($value);


}
?>