<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCourseregistrationcodeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCourseregistrationcode 
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
 	 * @param shoppingcartCourseregistrationcode primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregistrationcode shoppingcartCourseregistrationcode
 	 */
	public function insert($shoppingcartCourseregistrationcode);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregistrationcode shoppingcartCourseregistrationcode
 	 */
	public function update($shoppingcartCourseregistrationcode);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCode($value);

	public function queryByCourseId($value);

	public function queryByCreatedById($value);

	public function queryByCreatedAt($value);

	public function queryByInvoiceId($value);

	public function queryByOrderId($value);

	public function queryByModeSlug($value);

	public function queryByInvoiceItemId($value);


	public function deleteByCode($value);

	public function deleteByCourseId($value);

	public function deleteByCreatedById($value);

	public function deleteByCreatedAt($value);

	public function deleteByInvoiceId($value);

	public function deleteByOrderId($value);

	public function deleteByModeSlug($value);

	public function deleteByInvoiceItemId($value);


}
?>