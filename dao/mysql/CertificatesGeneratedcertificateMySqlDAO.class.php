<?php
/**
 * Class that operate on table 'certificates_generatedcertificate'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CertificatesGeneratedcertificateMySqlDAO implements CertificatesGeneratedcertificateDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CertificatesGeneratedcertificateMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM certificates_generatedcertificate';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM certificates_generatedcertificate ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param certificatesGeneratedcertificate primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CertificatesGeneratedcertificateMySql certificatesGeneratedcertificate
 	 */
	public function insert($certificatesGeneratedcertificate){
		$sql = 'INSERT INTO certificates_generatedcertificate (user_id, download_url, grade, course_id, key, distinction, status, verify_uuid, download_uuid, name, created_date, modified_date, error_reason, mode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($certificatesGeneratedcertificate->userId);
		$sqlQuery->set($certificatesGeneratedcertificate->downloadUrl);
		$sqlQuery->set($certificatesGeneratedcertificate->grade);
		$sqlQuery->set($certificatesGeneratedcertificate->courseId);
		$sqlQuery->set($certificatesGeneratedcertificate->key);
		$sqlQuery->setNumber($certificatesGeneratedcertificate->distinction);
		$sqlQuery->set($certificatesGeneratedcertificate->status);
		$sqlQuery->set($certificatesGeneratedcertificate->verifyUuid);
		$sqlQuery->set($certificatesGeneratedcertificate->downloadUuid);
		$sqlQuery->set($certificatesGeneratedcertificate->name);
		$sqlQuery->set($certificatesGeneratedcertificate->createdDate);
		$sqlQuery->set($certificatesGeneratedcertificate->modifiedDate);
		$sqlQuery->set($certificatesGeneratedcertificate->errorReason);
		$sqlQuery->set($certificatesGeneratedcertificate->mode);

		$id = $this->executeInsert($sqlQuery);	
		$certificatesGeneratedcertificate->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CertificatesGeneratedcertificateMySql certificatesGeneratedcertificate
 	 */
	public function update($certificatesGeneratedcertificate){
		$sql = 'UPDATE certificates_generatedcertificate SET user_id = ?, download_url = ?, grade = ?, course_id = ?, key = ?, distinction = ?, status = ?, verify_uuid = ?, download_uuid = ?, name = ?, created_date = ?, modified_date = ?, error_reason = ?, mode = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($certificatesGeneratedcertificate->userId);
		$sqlQuery->set($certificatesGeneratedcertificate->downloadUrl);
		$sqlQuery->set($certificatesGeneratedcertificate->grade);
		$sqlQuery->set($certificatesGeneratedcertificate->courseId);
		$sqlQuery->set($certificatesGeneratedcertificate->key);
		$sqlQuery->setNumber($certificatesGeneratedcertificate->distinction);
		$sqlQuery->set($certificatesGeneratedcertificate->status);
		$sqlQuery->set($certificatesGeneratedcertificate->verifyUuid);
		$sqlQuery->set($certificatesGeneratedcertificate->downloadUuid);
		$sqlQuery->set($certificatesGeneratedcertificate->name);
		$sqlQuery->set($certificatesGeneratedcertificate->createdDate);
		$sqlQuery->set($certificatesGeneratedcertificate->modifiedDate);
		$sqlQuery->set($certificatesGeneratedcertificate->errorReason);
		$sqlQuery->set($certificatesGeneratedcertificate->mode);

		$sqlQuery->setNumber($certificatesGeneratedcertificate->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM certificates_generatedcertificate';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDownloadUrl($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE download_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGrade($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKey($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDistinction($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE distinction = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVerifyUuid($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE verify_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDownloadUuid($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE download_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedDate($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE created_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModifiedDate($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE modified_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByErrorReason($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE error_reason = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMode($value){
		$sql = 'SELECT * FROM certificates_generatedcertificate WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDownloadUrl($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE download_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGrade($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE grade = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKey($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDistinction($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE distinction = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVerifyUuid($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE verify_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDownloadUuid($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE download_uuid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedDate($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE created_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModifiedDate($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE modified_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByErrorReason($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE error_reason = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMode($value){
		$sql = 'DELETE FROM certificates_generatedcertificate WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CertificatesGeneratedcertificateMySql 
	 */
	protected function readRow($row){
		$certificatesGeneratedcertificate = new CertificatesGeneratedcertificate();
		
		$certificatesGeneratedcertificate->id = $row['id'];
		$certificatesGeneratedcertificate->userId = $row['user_id'];
		$certificatesGeneratedcertificate->downloadUrl = $row['download_url'];
		$certificatesGeneratedcertificate->grade = $row['grade'];
		$certificatesGeneratedcertificate->courseId = $row['course_id'];
		$certificatesGeneratedcertificate->key = $row['key'];
		$certificatesGeneratedcertificate->distinction = $row['distinction'];
		$certificatesGeneratedcertificate->status = $row['status'];
		$certificatesGeneratedcertificate->verifyUuid = $row['verify_uuid'];
		$certificatesGeneratedcertificate->downloadUuid = $row['download_uuid'];
		$certificatesGeneratedcertificate->name = $row['name'];
		$certificatesGeneratedcertificate->createdDate = $row['created_date'];
		$certificatesGeneratedcertificate->modifiedDate = $row['modified_date'];
		$certificatesGeneratedcertificate->errorReason = $row['error_reason'];
		$certificatesGeneratedcertificate->mode = $row['mode'];

		return $certificatesGeneratedcertificate;
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
	 * @return CertificatesGeneratedcertificateMySql 
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