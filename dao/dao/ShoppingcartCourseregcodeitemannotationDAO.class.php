<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ShoppingcartCourseregcodeitemannotationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ShoppingcartCourseregcodeitemannotation 
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
 	 * @param shoppingcartCourseregcodeitemannotation primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregcodeitemannotation shoppingcartCourseregcodeitemannotation
 	 */
	public function insert($shoppingcartCourseregcodeitemannotation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregcodeitemannotation shoppingcartCourseregcodeitemannotation
 	 */
	public function update($shoppingcartCourseregcodeitemannotation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCourseId($value);

	public function queryByAnnotation($value);


	public function deleteByCourseId($value);

	public function deleteByAnnotation($value);


}
?>