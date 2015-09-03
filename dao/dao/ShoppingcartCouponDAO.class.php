<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCouponDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCoupon 
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
 	 * @param shoppingcartCoupon primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCoupon shoppingcartCoupon
 	 */
	public function insert($shoppingcartCoupon);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCoupon shoppingcartCoupon
 	 */
	public function update($shoppingcartCoupon);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCode($value);

	public function queryByDescription($value);

	public function queryByCourseId($value);

	public function queryByPercentageDiscount($value);

	public function queryByCreatedById($value);

	public function queryByCreatedAt($value);

	public function queryByIsActive($value);

	public function queryByExpirationDate($value);


	public function deleteByCode($value);

	public function deleteByDescription($value);

	public function deleteByCourseId($value);

	public function deleteByPercentageDiscount($value);

	public function deleteByCreatedById($value);

	public function deleteByCreatedAt($value);

	public function deleteByIsActive($value);

	public function deleteByExpirationDate($value);


}
?>