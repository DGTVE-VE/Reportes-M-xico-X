<?php
/**
 * Class that operate on table 'django_openid_auth_association'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoOpenidAuthAssociationMySqlDAO implements DjangoOpenidAuthAssociationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoOpenidAuthAssociationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_openid_auth_association';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_openid_auth_association ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoOpenidAuthAssociation primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_openid_auth_association WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoOpenidAuthAssociationMySql djangoOpenidAuthAssociation
 	 */
	public function insert($djangoOpenidAuthAssociation){
		$sql = 'INSERT INTO django_openid_auth_association (server_url, handle, secret, issued, lifetime, assoc_type) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoOpenidAuthAssociation->serverUrl);
		$sqlQuery->set($djangoOpenidAuthAssociation->handle);
		$sqlQuery->set($djangoOpenidAuthAssociation->secret);
		$sqlQuery->setNumber($djangoOpenidAuthAssociation->issued);
		$sqlQuery->setNumber($djangoOpenidAuthAssociation->lifetime);
		$sqlQuery->set($djangoOpenidAuthAssociation->assocType);

		$id = $this->executeInsert($sqlQuery);	
		$djangoOpenidAuthAssociation->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoOpenidAuthAssociationMySql djangoOpenidAuthAssociation
 	 */
	public function update($djangoOpenidAuthAssociation){
		$sql = 'UPDATE django_openid_auth_association SET server_url = ?, handle = ?, secret = ?, issued = ?, lifetime = ?, assoc_type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoOpenidAuthAssociation->serverUrl);
		$sqlQuery->set($djangoOpenidAuthAssociation->handle);
		$sqlQuery->set($djangoOpenidAuthAssociation->secret);
		$sqlQuery->setNumber($djangoOpenidAuthAssociation->issued);
		$sqlQuery->setNumber($djangoOpenidAuthAssociation->lifetime);
		$sqlQuery->set($djangoOpenidAuthAssociation->assocType);

		$sqlQuery->setNumber($djangoOpenidAuthAssociation->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_openid_auth_association';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByServerUrl($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE server_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHandle($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE handle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySecret($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE secret = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIssued($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLifetime($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE lifetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAssocType($value){
		$sql = 'SELECT * FROM django_openid_auth_association WHERE assoc_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByServerUrl($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE server_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHandle($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE handle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySecret($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE secret = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIssued($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE issued = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLifetime($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE lifetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAssocType($value){
		$sql = 'DELETE FROM django_openid_auth_association WHERE assoc_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoOpenidAuthAssociationMySql 
	 */
	protected function readRow($row){
		$djangoOpenidAuthAssociation = new DjangoOpenidAuthAssociation();
		
		$djangoOpenidAuthAssociation->id = $row['id'];
		$djangoOpenidAuthAssociation->serverUrl = $row['server_url'];
		$djangoOpenidAuthAssociation->handle = $row['handle'];
		$djangoOpenidAuthAssociation->secret = $row['secret'];
		$djangoOpenidAuthAssociation->issued = $row['issued'];
		$djangoOpenidAuthAssociation->lifetime = $row['lifetime'];
		$djangoOpenidAuthAssociation->assocType = $row['assoc_type'];

		return $djangoOpenidAuthAssociation;
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
	 * @return DjangoOpenidAuthAssociationMySql 
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