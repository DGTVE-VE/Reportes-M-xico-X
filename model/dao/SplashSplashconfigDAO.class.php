<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface SplashSplashconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SplashSplashconfig 
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
 	 * @param splashSplashconfig primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SplashSplashconfig splashSplashconfig
 	 */
	public function insert($splashSplashconfig);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SplashSplashconfig splashSplashconfig
 	 */
	public function update($splashSplashconfig);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeDate($value);

	public function queryByChangedById($value);

	public function queryByEnabled($value);

	public function queryByCookieName($value);

	public function queryByCookieAllowedValues($value);

	public function queryByUnaffectedUsernames($value);

	public function queryByRedirectUrl($value);

	public function queryByUnaffectedUrlPaths($value);


	public function deleteByChangeDate($value);

	public function deleteByChangedById($value);

	public function deleteByEnabled($value);

	public function deleteByCookieName($value);

	public function deleteByCookieAllowedValues($value);

	public function deleteByUnaffectedUsernames($value);

	public function deleteByRedirectUrl($value);

	public function deleteByUnaffectedUrlPaths($value);


}
?>