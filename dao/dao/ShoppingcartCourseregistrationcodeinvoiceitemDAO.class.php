<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCourseregistrationcodeinvoiceitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCourseregistrationcodeinvoiceitem 
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
 	 * @param shoppingcartCourseregistrationcodeinvoiceitem primary key
 	 */
	public function delete($invoiceitem_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeinvoiceitem shoppingcartCourseregistrationcodeinvoiceitem
 	 */
	public function insert($shoppingcartCourseregistrationcodeinvoiceitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeinvoiceitem shoppingcartCourseregistrationcodeinvoiceitem
 	 */
	public function update($shoppingcartCourseregistrationcodeinvoiceitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);


	public function deleteByCourseId($value);


}
?>