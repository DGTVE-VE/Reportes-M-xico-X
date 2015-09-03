<?php
/**
 * Class that operate on table 'certificates_certificatewhitelist'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CertificatesCertificatewhitelistMySqlDAO implements CertificatesCertificatewhitelistDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CertificatesCertificatewhitelistMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM certificates_certificatewhitelist WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM certificates_certificatewhitelist';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM certificates_certificatewhitelist ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param certificatesCertificatewhitelist primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM certificates_certificatewhitelist WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CertificatesCertificatewhitelistMySql certificatesCertificatewhitelist
 	 */
	public function insert($certificatesCertificatewhitelist){
		$sql = 'INSERT INTO certificates_certificatewhitelist (user_id, course_id, whitelist) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($certificatesCertificatewhitelist->userId);
		$sqlQuery->set($certificatesCertificatewhitelist->courseId);
		$sqlQuery->setNumber($certificatesCertificatewhitelist->whitelist);

		$id = $this->executeInsert($sqlQuery);	
		$certificatesCertificatewhitelist->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CertificatesCertificatewhitelistMySql certificatesCertificatewhitelist
 	 */
	public function update($certificatesCertificatewhitelist){
		$sql = 'UPDATE certificates_certificatewhitelist SET user_id = ?, course_id = ?, whitelist = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($certificatesCertificatewhitelist->userId);
		$sqlQuery->set($certificatesCertificatewhitelist->courseId);
		$sqlQuery->setNumber($certificatesCertificatewhitelist->whitelist);

		$sqlQuery->setNumber($certificatesCertificatewhitelist->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM certificates_certificatewhitelist';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM certificates_certificatewhitelist WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM certificates_certificatewhitelist WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWhitelist($value){
		$sql = 'SELECT * FROM certificates_certificatewhitelist WHERE whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM certificates_certificatewhitelist WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM certificates_certificatewhitelist WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWhitelist($value){
		$sql = 'DELETE FROM certificates_certificatewhitelist WHERE whitelist = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CertificatesCertificatewhitelistMySql 
	 */
	protected function readRow($row){
		$certificatesCertificatewhitelist = new CertificatesCertificatewhitelist();
		
		$certificatesCertificatewhitelist->id = $row['id'];
		$certificatesCertificatewhitelist->userId = $row['user_id'];
		$certificatesCertificatewhitelist->courseId = $row['course_id'];
		$certificatesCertificatewhitelist->whitelist = $row['whitelist'];

		return $certificatesCertificatewhitelist;
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
	 * @return CertificatesCertificatewhitelistMySql 
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