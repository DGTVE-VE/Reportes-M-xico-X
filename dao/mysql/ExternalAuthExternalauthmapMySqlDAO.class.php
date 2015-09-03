<?php
/**
 * Class that operate on table 'external_auth_externalauthmap'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ExternalAuthExternalauthmapMySqlDAO implements ExternalAuthExternalauthmapDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ExternalAuthExternalauthmapMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM external_auth_externalauthmap';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM external_auth_externalauthmap ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param externalAuthExternalauthmap primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ExternalAuthExternalauthmapMySql externalAuthExternalauthmap
 	 */
	public function insert($externalAuthExternalauthmap){
		$sql = 'INSERT INTO external_auth_externalauthmap (external_id, external_domain, external_credentials, external_email, external_name, user_id, internal_password, dtcreated, dtsignup) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($externalAuthExternalauthmap->externalId);
		$sqlQuery->set($externalAuthExternalauthmap->externalDomain);
		$sqlQuery->set($externalAuthExternalauthmap->externalCredentials);
		$sqlQuery->set($externalAuthExternalauthmap->externalEmail);
		$sqlQuery->set($externalAuthExternalauthmap->externalName);
		$sqlQuery->setNumber($externalAuthExternalauthmap->userId);
		$sqlQuery->set($externalAuthExternalauthmap->internalPassword);
		$sqlQuery->set($externalAuthExternalauthmap->dtcreated);
		$sqlQuery->set($externalAuthExternalauthmap->dtsignup);

		$id = $this->executeInsert($sqlQuery);	
		$externalAuthExternalauthmap->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ExternalAuthExternalauthmapMySql externalAuthExternalauthmap
 	 */
	public function update($externalAuthExternalauthmap){
		$sql = 'UPDATE external_auth_externalauthmap SET external_id = ?, external_domain = ?, external_credentials = ?, external_email = ?, external_name = ?, user_id = ?, internal_password = ?, dtcreated = ?, dtsignup = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($externalAuthExternalauthmap->externalId);
		$sqlQuery->set($externalAuthExternalauthmap->externalDomain);
		$sqlQuery->set($externalAuthExternalauthmap->externalCredentials);
		$sqlQuery->set($externalAuthExternalauthmap->externalEmail);
		$sqlQuery->set($externalAuthExternalauthmap->externalName);
		$sqlQuery->setNumber($externalAuthExternalauthmap->userId);
		$sqlQuery->set($externalAuthExternalauthmap->internalPassword);
		$sqlQuery->set($externalAuthExternalauthmap->dtcreated);
		$sqlQuery->set($externalAuthExternalauthmap->dtsignup);

		$sqlQuery->setNumber($externalAuthExternalauthmap->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM external_auth_externalauthmap';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByExternalId($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE external_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExternalDomain($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE external_domain = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExternalCredentials($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE external_credentials = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExternalEmail($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE external_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExternalName($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE external_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInternalPassword($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE internal_password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDtcreated($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE dtcreated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDtsignup($value){
		$sql = 'SELECT * FROM external_auth_externalauthmap WHERE dtsignup = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByExternalId($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE external_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExternalDomain($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE external_domain = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExternalCredentials($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE external_credentials = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExternalEmail($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE external_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExternalName($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE external_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInternalPassword($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE internal_password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDtcreated($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE dtcreated = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDtsignup($value){
		$sql = 'DELETE FROM external_auth_externalauthmap WHERE dtsignup = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ExternalAuthExternalauthmapMySql 
	 */
	protected function readRow($row){
		$externalAuthExternalauthmap = new ExternalAuthExternalauthmap();
		
		$externalAuthExternalauthmap->id = $row['id'];
		$externalAuthExternalauthmap->externalId = $row['external_id'];
		$externalAuthExternalauthmap->externalDomain = $row['external_domain'];
		$externalAuthExternalauthmap->externalCredentials = $row['external_credentials'];
		$externalAuthExternalauthmap->externalEmail = $row['external_email'];
		$externalAuthExternalauthmap->externalName = $row['external_name'];
		$externalAuthExternalauthmap->userId = $row['user_id'];
		$externalAuthExternalauthmap->internalPassword = $row['internal_password'];
		$externalAuthExternalauthmap->dtcreated = $row['dtcreated'];
		$externalAuthExternalauthmap->dtsignup = $row['dtsignup'];

		return $externalAuthExternalauthmap;
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
	 * @return ExternalAuthExternalauthmapMySql 
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