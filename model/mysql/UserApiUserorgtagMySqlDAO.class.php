<?php
/**
 * Class that operate on table 'user_api_userorgtag'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class UserApiUserorgtagMySqlDAO implements UserApiUserorgtagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserApiUserorgtagMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM user_api_userorgtag';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM user_api_userorgtag ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userApiUserorgtag primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM user_api_userorgtag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserApiUserorgtagMySql userApiUserorgtag
 	 */
	public function insert($userApiUserorgtag){
		$sql = 'INSERT INTO user_api_userorgtag (created, modified, user_id, key, org, value) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($userApiUserorgtag->created);
		$sqlQuery->set($userApiUserorgtag->modified);
		$sqlQuery->setNumber($userApiUserorgtag->userId);
		$sqlQuery->set($userApiUserorgtag->key);
		$sqlQuery->set($userApiUserorgtag->org);
		$sqlQuery->set($userApiUserorgtag->value);

		$id = $this->executeInsert($sqlQuery);	
		$userApiUserorgtag->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserApiUserorgtagMySql userApiUserorgtag
 	 */
	public function update($userApiUserorgtag){
		$sql = 'UPDATE user_api_userorgtag SET created = ?, modified = ?, user_id = ?, key = ?, org = ?, value = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($userApiUserorgtag->created);
		$sqlQuery->set($userApiUserorgtag->modified);
		$sqlQuery->setNumber($userApiUserorgtag->userId);
		$sqlQuery->set($userApiUserorgtag->key);
		$sqlQuery->set($userApiUserorgtag->org);
		$sqlQuery->set($userApiUserorgtag->value);

		$sqlQuery->setNumber($userApiUserorgtag->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM user_api_userorgtag';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKey($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrg($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE org = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByValue($value){
		$sql = 'SELECT * FROM user_api_userorgtag WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKey($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrg($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE org = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByValue($value){
		$sql = 'DELETE FROM user_api_userorgtag WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserApiUserorgtagMySql 
	 */
	protected function readRow($row){
		$userApiUserorgtag = new UserApiUserorgtag();
		
		$userApiUserorgtag->id = $row['id'];
		$userApiUserorgtag->created = $row['created'];
		$userApiUserorgtag->modified = $row['modified'];
		$userApiUserorgtag->userId = $row['user_id'];
		$userApiUserorgtag->key = $row['key'];
		$userApiUserorgtag->org = $row['org'];
		$userApiUserorgtag->value = $row['value'];

		return $userApiUserorgtag;
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
	 * @return UserApiUserorgtagMySql 
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