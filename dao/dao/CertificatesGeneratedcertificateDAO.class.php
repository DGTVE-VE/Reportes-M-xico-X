<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface CertificatesGeneratedcertificateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CertificatesGeneratedcertificate 
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
 	 * @param certificatesGeneratedcertificate primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CertificatesGeneratedcertificate certificatesGeneratedcertificate
 	 */
	public function insert($certificatesGeneratedcertificate);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CertificatesGeneratedcertificate certificatesGeneratedcertificate
 	 */
	public function update($certificatesGeneratedcertificate);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByDownloadUrl($value);

	public function queryByGrade($value);

	public function queryByCourseId($value);

	public function queryByKey($value);

	public function queryByDistinction($value);

	public function queryByStatus($value);

	public function queryByVerifyUuid($value);

	public function queryByDownloadUuid($value);

	public function queryByName($value);

	public function queryByCreatedDate($value);

	public function queryByModifiedDate($value);

	public function queryByErrorReason($value);

	public function queryByMode($value);


	public function deleteByUserId($value);

	public function deleteByDownloadUrl($value);

	public function deleteByGrade($value);

	public function deleteByCourseId($value);

	public function deleteByKey($value);

	public function deleteByDistinction($value);

	public function deleteByStatus($value);

	public function deleteByVerifyUuid($value);

	public function deleteByDownloadUuid($value);

	public function deleteByName($value);

	public function deleteByCreatedDate($value);

	public function deleteByModifiedDate($value);

	public function deleteByErrorReason($value);

	public function deleteByMode($value);


}
?>