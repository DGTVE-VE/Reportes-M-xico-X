<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartInvoiceitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartInvoiceitem 
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
 	 * @param shoppingcartInvoiceitem primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoiceitem shoppingcartInvoiceitem
 	 */
	public function insert($shoppingcartInvoiceitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoiceitem shoppingcartInvoiceitem
 	 */
	public function update($shoppingcartInvoiceitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCreated($value);

	public function queryByModified($value);

	public function queryByInvoiceId($value);

	public function queryByQty($value);

	public function queryByUnitPrice($value);

	public function queryByCurrency($value);


	public function deleteByCreated($value);

	public function deleteByModified($value);

	public function deleteByInvoiceId($value);

	public function deleteByQty($value);

	public function deleteByUnitPrice($value);

	public function deleteByCurrency($value);


}
?>