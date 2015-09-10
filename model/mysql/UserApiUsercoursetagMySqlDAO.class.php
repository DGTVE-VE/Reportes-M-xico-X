<?php
/**
 * Class that operate on table 'user_api_usercoursetag'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class UserApiUsercoursetagMySqlDAO implements UserApiUsercoursetagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserApiUsercoursetagMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM user_api_usercoursetag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM user_api_usercoursetag';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM user_api_usercoursetag ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userApiUsercoursetag primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM user_api_usercoursetag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserApiUsercoursetagMySql userApiUsercoursetag
 	 */
	public function insert($userApiUsercoursetag){
		$sql = 'INSERT INTO user_api_usercoursetag (user_id, key, course_id, value) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userApiUsercoursetag->userId);
		$sqlQuery->set($userApiUsercoursetag->key);
		$sqlQuery->set($userApiUsercoursetag->courseId);
		$sqlQuery->set($userApiUsercoursetag->value);

		$id = $this->executeInsert($sqlQuery);	
		$userApiUsercoursetag->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserApiUsercoursetagMySql userApiUsercoursetag
 	 */
	public function update($userApiUsercoursetag){
		$sql = 'UPDATE user_api_usercoursetag SET user_id = ?, key = ?, course_id = ?, value = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userApiUsercoursetag->userId);
		$sqlQuery->set($userApiUsercoursetag->key);
		$sqlQuery->set($userApiUsercoursetag->courseId);
		$sqlQuery->set($userApiUsercoursetag->value);

		$sqlQuery->setNumber($userApiUsercoursetag->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM user_api_usercoursetag';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM user_api_usercoursetag WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKey($value){
		$sql = 'SELECT * FROM user_api_usercoursetag WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM user_api_usercoursetag WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByValue($value){
		$sql = 'SELECT * FROM user_api_usercoursetag WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM user_api_usercoursetag WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKey($value){
		$sql = 'DELETE FROM user_api_usercoursetag WHERE key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM user_api_usercoursetag WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByValue($value){
		$sql = 'DELETE FROM user_api_usercoursetag WHERE value = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserApiUsercoursetagMySql 
	 */
	protected function readRow($row){
		$userApiUsercoursetag = new UserApiUsercoursetag();
		
		$userApiUsercoursetag->id = $row['id'];
		$userApiUsercoursetag->userId = $row['user_id'];
		$userApiUsercoursetag->key = $row['key'];
		$userApiUsercoursetag->courseId = $row['course_id'];
		$userApiUsercoursetag->value = $row['value'];

		return $userApiUsercoursetag;
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
	 * @return UserApiUsercoursetagMySql 
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