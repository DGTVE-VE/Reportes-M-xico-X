<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCouponredemptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCouponredemption 
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
 	 * @param shoppingcartCouponredemption primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCouponredemption shoppingcartCouponredemption
 	 */
	public function insert($shoppingcartCouponredemption);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCouponredemption shoppingcartCouponredemption
 	 */
	public function update($shoppingcartCouponredemption);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrderId($value);

	public function queryByUserId($value);

	public function queryByCouponId($value);


	public function deleteByOrderId($value);

	public function deleteByUserId($value);

	public function deleteByCouponId($value);


}
?>