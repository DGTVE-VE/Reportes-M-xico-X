<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface StudentLinkedinaddtoprofileconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return StudentLinkedinaddtoprofileconfiguration 
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
 	 * @param studentLinkedinaddtoprofileconfiguration primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param StudentLinkedinaddtoprofileconfiguration studentLinkedinaddtoprofileconfiguration
 	 */
	public function insert($studentLinkedinaddtoprofileconfiguration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param StudentLinkedinaddtoprofileconfiguration studentLinkedinaddtoprofileconfiguration
 	 */
	public function update($studentLinkedinaddtoprofileconfiguration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByCompanyIdentifier($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByCompanyIdentifier($value);


}
?>