<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartPaidcourseregistrationannotationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartPaidcourseregistrationannotation 
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
 	 * @param shoppingcartPaidcourseregistrationannotation primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationannotation shoppingcartPaidcourseregistrationannotation
 	 */
	public function insert($shoppingcartPaidcourseregistrationannotation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationannotation shoppingcartPaidcourseregistrationannotation
 	 */
	public function update($shoppingcartPaidcourseregistrationannotation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByAnnotation($value);


	public function deleteByCourseId($value);

	public function deleteByAnnotation($value);


}
?>