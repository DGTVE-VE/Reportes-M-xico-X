<?php
/**
 * Class that operate on table 'verify_student_softwaresecurephotoverification'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class VerifyStudentSoftwaresecurephotoverificationMySqlDAO implements VerifyStudentSoftwaresecurephotoverificationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return VerifyStudentSoftwaresecurephotoverificationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param verifyStudentSoftwaresecurephotoverification primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param VerifyStudentSoftwaresecurephotoverificationMySql verifyStudentSoftwaresecurephotoverification
 	 */
	public function insert($verifyStudentSoftwaresecurephotoverification){
		$sql = 'INSERT INTO verify_student_softwaresecurephotoverification (status, status_changed, user_id, name, face_image_url, photo_id_image_url, receipt_id, created_at, updated_at, submitted_at, reviewing_user_id, reviewing_service, error_msg, error_code, photo_id_key, window_id, display) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->status);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->statusChanged);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->userId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->name);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->faceImageUrl);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->photoIdImageUrl);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->receiptId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->createdAt);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->updatedAt);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->submittedAt);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->reviewingUserId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->reviewingService);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->errorMsg);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->errorCode);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->photoIdKey);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->windowId);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->display);

		$id = $this->executeInsert($sqlQuery);	
		$verifyStudentSoftwaresecurephotoverification->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param VerifyStudentSoftwaresecurephotoverificationMySql verifyStudentSoftwaresecurephotoverification
 	 */
	public function update($verifyStudentSoftwaresecurephotoverification){
		$sql = 'UPDATE verify_student_softwaresecurephotoverification SET status = ?, status_changed = ?, user_id = ?, name = ?, face_image_url = ?, photo_id_image_url = ?, receipt_id = ?, created_at = ?, updated_at = ?, submitted_at = ?, reviewing_user_id = ?, reviewing_service = ?, error_msg = ?, error_code = ?, photo_id_key = ?, window_id = ?, display = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->status);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->statusChanged);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->userId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->name);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->faceImageUrl);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->photoIdImageUrl);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->receiptId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->createdAt);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->updatedAt);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->submittedAt);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->reviewingUserId);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->reviewingService);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->errorMsg);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->errorCode);
		$sqlQuery->set($verifyStudentSoftwaresecurephotoverification->photoIdKey);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->windowId);
		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->display);

		$sqlQuery->setNumber($verifyStudentSoftwaresecurephotoverification->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatusChanged($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE status_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFaceImageUrl($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE face_image_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhotoIdImageUrl($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE photo_id_image_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReceiptId($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE receipt_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdatedAt($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubmittedAt($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE submitted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReviewingUserId($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE reviewing_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReviewingService($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE reviewing_service = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByErrorMsg($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE error_msg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByErrorCode($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE error_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPhotoIdKey($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE photo_id_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWindowId($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE window_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisplay($value){
		$sql = 'SELECT * FROM verify_student_softwaresecurephotoverification WHERE display = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStatus($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatusChanged($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE status_changed = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFaceImageUrl($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE face_image_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhotoIdImageUrl($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE photo_id_image_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReceiptId($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE receipt_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdatedAt($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubmittedAt($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE submitted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReviewingUserId($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE reviewing_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReviewingService($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE reviewing_service = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByErrorMsg($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE error_msg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByErrorCode($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE error_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPhotoIdKey($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE photo_id_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWindowId($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE window_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisplay($value){
		$sql = 'DELETE FROM verify_student_softwaresecurephotoverification WHERE display = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return VerifyStudentSoftwaresecurephotoverificationMySql 
	 */
	protected function readRow($row){
		$verifyStudentSoftwaresecurephotoverification = new VerifyStudentSoftwaresecurephotoverification();
		
		$verifyStudentSoftwaresecurephotoverification->id = $row['id'];
		$verifyStudentSoftwaresecurephotoverification->status = $row['status'];
		$verifyStudentSoftwaresecurephotoverification->statusChanged = $row['status_changed'];
		$verifyStudentSoftwaresecurephotoverification->userId = $row['user_id'];
		$verifyStudentSoftwaresecurephotoverification->name = $row['name'];
		$verifyStudentSoftwaresecurephotoverification->faceImageUrl = $row['face_image_url'];
		$verifyStudentSoftwaresecurephotoverification->photoIdImageUrl = $row['photo_id_image_url'];
		$verifyStudentSoftwaresecurephotoverification->receiptId = $row['receipt_id'];
		$verifyStudentSoftwaresecurephotoverification->createdAt = $row['created_at'];
		$verifyStudentSoftwaresecurephotoverification->updatedAt = $row['updated_at'];
		$verifyStudentSoftwaresecurephotoverification->submittedAt = $row['submitted_at'];
		$verifyStudentSoftwaresecurephotoverification->reviewingUserId = $row['reviewing_user_id'];
		$verifyStudentSoftwaresecurephotoverification->reviewingService = $row['reviewing_service'];
		$verifyStudentSoftwaresecurephotoverification->errorMsg = $row['error_msg'];
		$verifyStudentSoftwaresecurephotoverification->errorCode = $row['error_code'];
		$verifyStudentSoftwaresecurephotoverification->photoIdKey = $row['photo_id_key'];
		$verifyStudentSoftwaresecurephotoverification->windowId = $row['window_id'];
		$verifyStudentSoftwaresecurephotoverification->display = $row['display'];

		return $verifyStudentSoftwaresecurephotoverification;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return VerifyStudentSoftwaresecurephotoverificationMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>