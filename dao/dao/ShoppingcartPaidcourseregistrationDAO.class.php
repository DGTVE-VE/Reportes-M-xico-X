<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartPaidcourseregistrationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartPaidcourseregistration 
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
 	 * @param shoppingcartPaidcourseregistration primary key
 	 */
	public function delete($orderitem_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartPaidcourseregistration shoppingcartPaidcourseregistration
 	 */
	public function insert($shoppingcartPaidcourseregistration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartPaidcourseregistration shoppingcartPaidcourseregistration
 	 */
	public function update($shoppingcartPaidcourseregistration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByMode($value);

	public function queryByCourseEnrollmentId($value);


	public function deleteByCourseId($value);

	public function deleteByMode($value);

	public function deleteByCourseEnrollmentId($value);


}
?>