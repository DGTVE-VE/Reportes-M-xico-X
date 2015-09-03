<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface VerifyStudentSoftwaresecurephotoverificationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return VerifyStudentSoftwaresecurephotoverification 
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
 	 * @param verifyStudentSoftwaresecurephotoverification primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param VerifyStudentSoftwaresecurephotoverification verifyStudentSoftwaresecurephotoverification
 	 */
	public function insert($verifyStudentSoftwaresecurephotoverification);
	
	/**
 	 * Update record in table
 	 *
 	 * @param VerifyStudentSoftwaresecurephotoverification verifyStudentSoftwaresecurephotoverification
 	 */
	public function update($verifyStudentSoftwaresecurephotoverification);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStatus($value);

	public function queryByStatusChanged($value);

	public function queryByUserId($value);

	public function queryByName($value);

	public function queryByFaceImageUrl($value);

	public function queryByPhotoIdImageUrl($value);

	public function queryByReceiptId($value);

	public function queryByCreatedAt($value);

	public function queryByUpdatedAt($value);

	public function queryBySubmittedAt($value);

	public function queryByReviewingUserId($value);

	public function queryByReviewingService($value);

	public function queryByErrorMsg($value);

	public function queryByErrorCode($value);

	public function queryByPhotoIdKey($value);

	public function queryByWindowId($value);

	public function queryByDisplay($value);


	public function deleteByStatus($value);

	public function deleteByStatusChanged($value);

	public function deleteByUserId($value);

	public function deleteByName($value);

	public function deleteByFaceImageUrl($value);

	public function deleteByPhotoIdImageUrl($value);

	public function deleteByReceiptId($value);

	public function deleteByCreatedAt($value);

	public function deleteByUpdatedAt($value);

	public function deleteBySubmittedAt($value);

	public function deleteByReviewingUserId($value);

	public function deleteByReviewingService($value);

	public function deleteByErrorMsg($value);

	public function deleteByErrorCode($value);

	public function deleteByPhotoIdKey($value);

	public function deleteByWindowId($value);

	public function deleteByDisplay($value);


}
?>