<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartInvoicetransactionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartInvoicetransaction 
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
 	 * @param shoppingcartInvoicetransaction primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoicetransaction shoppingcartInvoicetransaction
 	 */
	public function insert($shoppingcartInvoicetransaction);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoicetransaction shoppingcartInvoicetransaction
 	 */
	public function update($shoppingcartInvoicetransaction);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByInvoiceId($value);

	public function queryByAmount($value);

	public function queryByCurrency($value);

	public function queryByComments($value);

	public function queryByStatus($value);

	public function queryByCreatedById($value);

	public function queryByLastModifiedById($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByInvoiceId($value);

	public function deleteByAmount($value);

	public function deleteByCurrency($value);

	public function deleteByComments($value);

	public function deleteByStatus($value);

	public function deleteByCreatedById($value);

	public function deleteByLastModifiedById($value);


}
?>