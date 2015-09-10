<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartInvoice 
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
 	 * @param shoppingcartInvoice primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoice shoppingcartInvoice
 	 */
	public function insert($shoppingcartInvoice);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoice shoppingcartInvoice
 	 */
	public function update($shoppingcartInvoice);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTotalAmount($value);

	public function queryByCompanyName($value);

	public function queryByCourseId($value);

	public function queryByInternalReference($value);

	public function queryByIsValid($value);

	public function queryByAddressLine1($value);

	public function queryByAddressLine2($value);

	public function queryByAddressLine3($value);

	public function queryByCity($value);

	public function queryByState($value);

	public function queryByZip($value);

	public function queryByCountry($value);

	public function queryByRecipientName($value);

	public function queryByRecipientEmail($value);

	public function queryByCustomerReferenceNumber($value);

	public function queryByCompanyContactName($value);

	public function queryByCompanyContactEmail($value);

	public function queryByCreated($value);

	public function queryByModified($value);


	public function deleteByTotalAmount($value);

	public function deleteByCompanyName($value);

	public function deleteByCourseId($value);

	public function deleteByInternalReference($value);

	public function deleteByIsValid($value);

	public function deleteByAddressLine1($value);

	public function deleteByAddressLine2($value);

	public function deleteByAddressLine3($value);

	public function deleteByCity($value);

	public function deleteByState($value);

	public function deleteByZip($value);

	public function deleteByCountry($value);

	public function deleteByRecipientName($value);

	public function deleteByRecipientEmail($value);

	public function deleteByCustomerReferenceNumber($value);

	public function deleteByCompanyContactName($value);

	public function deleteByCompanyContactEmail($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);


}
?>