<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartInvoicehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartInvoicehistory 
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
 	 * @param shoppingcartInvoicehistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoicehistory shoppingcartInvoicehistory
 	 */
	public function insert($shoppingcartInvoicehistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoicehistory shoppingcartInvoicehistory
 	 */
	public function update($shoppingcartInvoicehistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTimestamp($value);

	public function queryByInvoiceId($value);

	public function queryBySnapshot($value);


	public function deleteByTimestamp($value);

	public function deleteByInvoiceId($value);

	public function deleteBySnapshot($value);


}
?>