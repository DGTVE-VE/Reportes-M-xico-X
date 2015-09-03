<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ExternalAuthExternalauthmapDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ExternalAuthExternalauthmap 
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
 	 * @param externalAuthExternalauthmap primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ExternalAuthExternalauthmap externalAuthExternalauthmap
 	 */
	public function insert($externalAuthExternalauthmap);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ExternalAuthExternalauthmap externalAuthExternalauthmap
 	 */
	public function update($externalAuthExternalauthmap);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByExternalId($value);

	public function queryByExternalDomain($value);

	public function queryByExternalCredentials($value);

	public function queryByExternalEmail($value);

	public function queryByExternalName($value);

	public function queryByUserId($value);

	public function queryByInternalPassword($value);

	public function queryByDtcreated($value);

	public function queryByDtsignup($value);


	public function deleteByExternalId($value);

	public function deleteByExternalDomain($value);

	public function deleteByExternalCredentials($value);

	public function deleteByExternalEmail($value);

	public function deleteByExternalName($value);

	public function deleteByUserId($value);

	public function deleteByInternalPassword($value);

	public function deleteByDtcreated($value);

	public function deleteByDtsignup($value);


}
?>