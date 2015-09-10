<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartOrderDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartOrder 
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
 	 * @param shoppingcartOrder primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartOrder shoppingcartOrder
 	 */
	public function insert($shoppingcartOrder);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartOrder shoppingcartOrder
 	 */
	public function update($shoppingcartOrder);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCurrency($value);

	public function queryByStatus($value);

	public function queryByPurchaseTime($value);

	public function queryByBillToFirst($value);

	public function queryByBillToLast($value);

	public function queryByBillToStreet1($value);

	public function queryByBillToStreet2($value);

	public function queryByBillToCity($value);

	public function queryByBillToState($value);

	public function queryByBillToPostalcode($value);

	public function queryByBillToCountry($value);

	public function queryByBillToCcnum($value);

	public function queryByBillToCardtype($value);

	public function queryByProcessorReplyDump($value);

	public function queryByRefundedTime($value);

	public function queryByCompanyName($value);

	public function queryByCompanyContactName($value);

	public function queryByCompanyContactEmail($value);

	public function queryByRecipientName($value);

	public function queryByRecipientEmail($value);

	public function queryByCustomerReferenceNumber($value);

	public function queryByOrderType($value);


	public function deleteByUserId($value);

	public function deleteByCurrency($value);

	public function deleteByStatus($value);

	public function deleteByPurchaseTime($value);

	public function deleteByBillToFirst($value);

	public function deleteByBillToLast($value);

	public function deleteByBillToStreet1($value);

	public function deleteByBillToStreet2($value);

	public function deleteByBillToCity($value);

	public function deleteByBillToState($value);

	public function deleteByBillToPostalcode($value);

	public function deleteByBillToCountry($value);

	public function deleteByBillToCcnum($value);

	public function deleteByBillToCardtype($value);

	public function deleteByProcessorReplyDump($value);

	public function deleteByRefundedTime($value);

	public function deleteByCompanyName($value);

	public function deleteByCompanyContactName($value);

	public function deleteByCompanyContactEmail($value);

	public function deleteByRecipientName($value);

	public function deleteByRecipientEmail($value);

	public function deleteByCustomerReferenceNumber($value);

	public function deleteByOrderType($value);


}
?>