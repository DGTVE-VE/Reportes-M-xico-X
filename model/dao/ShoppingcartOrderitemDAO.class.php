<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartOrderitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartOrderitem 
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
 	 * @param shoppingcartOrderitem primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartOrderitem shoppingcartOrderitem
 	 */
	public function insert($shoppingcartOrderitem);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartOrderitem shoppingcartOrderitem
 	 */
	public function update($shoppingcartOrderitem);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrderId($value);

	public function queryByUserId($value);

	public function queryByStatus($value);

	public function queryByQty($value);

	public function queryByUnitCost($value);

	public function queryByLineDesc($value);

	public function queryByCurrency($value);

	public function queryByFulfilledTime($value);

	public function queryByReportComments($value);

	public function queryByRefundRequestedTime($value);

	public function queryByServiceFee($value);

	public function queryByListPrice($value);

	public function queryByCreated($value);

	public function queryByModified($value);


	public function deleteByOrderId($value);

	public function deleteByUserId($value);

	public function deleteByStatus($value);

	public function deleteByQty($value);

	public function deleteByUnitCost($value);

	public function deleteByLineDesc($value);

	public function deleteByCurrency($value);

	public function deleteByFulfilledTime($value);

	public function deleteByReportComments($value);

	public function deleteByRefundRequestedTime($value);

	public function deleteByServiceFee($value);

	public function deleteByListPrice($value);

	public function deleteByCreated($value);

	public function deleteByModified($value);


}
?>