<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartDonationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartDonation 
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
 	 * @param shoppingcartDonation primary key
 	 */
	public function delete($orderitem_ptr_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartDonation shoppingcartDonation
 	 */
	public function insert($shoppingcartDonation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartDonation shoppingcartDonation
 	 */
	public function update($shoppingcartDonation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDonationType($value);

	public function queryByCourseId($value);


	public function deleteByDonationType($value);

	public function deleteByCourseId($value);


}
?>