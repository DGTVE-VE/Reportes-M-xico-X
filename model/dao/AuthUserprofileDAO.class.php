<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface AuthUserprofileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AuthUserprofile 
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
 	 * @param authUserprofile primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserprofile authUserprofile
 	 */
	public function insert($authUserprofile);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserprofile authUserprofile
 	 */
	public function update($authUserprofile);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByName($value);

	public function queryByLanguage($value);

	public function queryByLocation($value);

	public function queryByMeta($value);

	public function queryByCourseware($value);

	public function queryByGender($value);

	public function queryByMailingAddress($value);

	public function queryByYearOfBirth($value);

	public function queryByLevelOfEducation($value);

	public function queryByGoals($value);

	public function queryByAllowCertificate($value);

	public function queryByCountry($value);

	public function queryByCity($value);


	public function deleteByUserId($value);

	public function deleteByName($value);

	public function deleteByLanguage($value);

	public function deleteByLocation($value);

	public function deleteByMeta($value);

	public function deleteByCourseware($value);

	public function deleteByGender($value);

	public function deleteByMailingAddress($value);

	public function deleteByYearOfBirth($value);

	public function deleteByLevelOfEducation($value);

	public function deleteByGoals($value);

	public function deleteByAllowCertificate($value);

	public function deleteByCountry($value);

	public function deleteByCity($value);

        //public function queryPorcentaje();
}
?>