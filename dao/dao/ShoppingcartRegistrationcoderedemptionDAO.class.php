<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartRegistrationcoderedemptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartRegistrationcoderedemption 
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
 	 * @param shoppingcartRegistrationcoderedemption primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartRegistrationcoderedemption shoppingcartRegistrationcoderedemption
 	 */
	public function insert($shoppingcartRegistrationcoderedemption);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartRegistrationcoderedemption shoppingcartRegistrationcoderedemption
 	 */
	public function update($shoppingcartRegistrationcoderedemption);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrderId($value);

	public function queryByRegistrationCodeId($value);

	public function queryByRedeemedById($value);

	public function queryByRedeemedAt($value);

	public function queryByCourseEnrollmentId($value);


	public function deleteByOrderId($value);

	public function deleteByRegistrationCodeId($value);

	public function deleteByRedeemedById($value);

	public function deleteByRedeemedAt($value);

	public function deleteByCourseEnrollmentId($value);


}
?>