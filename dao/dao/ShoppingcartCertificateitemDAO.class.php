<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCertificateitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCertificateitem 
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
 	 * @param shoppingcartCertificateitem primary key
 	 */
	public function delete($orderitem_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCertificateitem shoppingcartCertificateitem
 	 */
	public function insert($shoppingcartCertificateitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCertificateitem shoppingcartCertificateitem
 	 */
	public function update($shoppingcartCertificateitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByCourseEnrollmentId($value);

	public function queryByMode($value);


	public function deleteByCourseId($value);

	public function deleteByCourseEnrollmentId($value);

	public function deleteByMode($value);


}
?>