<?php
/**
 * Class that operate on table 'auth_user'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AuthUserMySqlDAO implements AuthUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuthUserMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auth_user WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auth_user';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auth_user ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param authUser primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM auth_user WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserMySql authUser
 	 */
	public function insert($authUser){
		$sql = 'INSERT INTO auth_user (username, first_name, last_name, email, password, is_staff, is_active, is_superuser, last_login, date_joined) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($authUser->username);
		$sqlQuery->set($authUser->firstName);
		$sqlQuery->set($authUser->lastName);
		$sqlQuery->set($authUser->email);
		$sqlQuery->set($authUser->password);
		$sqlQuery->setNumber($authUser->isStaff);
		$sqlQuery->setNumber($authUser->isActive);
		$sqlQuery->setNumber($authUser->isSuperuser);
		$sqlQuery->set($authUser->lastLogin);
		$sqlQuery->set($authUser->dateJoined);

		$id = $this->executeInsert($sqlQuery);	
		$authUser->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserMySql authUser
 	 */
	public function update($authUser){
		$sql = 'UPDATE auth_user SET username = ?, first_name = ?, last_name = ?, email = ?, password = ?, is_staff = ?, is_active = ?, is_superuser = ?, last_login = ?, date_joined = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($authUser->username);
		$sqlQuery->set($authUser->firstName);
		$sqlQuery->set($authUser->lastName);
		$sqlQuery->set($authUser->email);
		$sqlQuery->set($authUser->password);
		$sqlQuery->setNumber($authUser->isStaff);
		$sqlQuery->setNumber($authUser->isActive);
		$sqlQuery->setNumber($authUser->isSuperuser);
		$sqlQuery->set($authUser->lastLogin);
		$sqlQuery->set($authUser->dateJoined);

		$sqlQuery->setNumber($authUser->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auth_user';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUsername($value){
		$sql = 'SELECT * FROM auth_user WHERE username = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFirstName($value){
		$sql = 'SELECT * FROM auth_user WHERE first_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastName($value){
		$sql = 'SELECT * FROM auth_user WHERE last_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM auth_user WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPassword($value){
		$sql = 'SELECT * FROM auth_user WHERE password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsStaff($value){
		$sql = 'SELECT * FROM auth_user WHERE is_staff = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsActive($value){
		$sql = 'SELECT * FROM auth_user WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsSuperuser($value){
		$sql = 'SELECT * FROM auth_user WHERE is_superuser = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastLogin($value){
		$sql = 'SELECT * FROM auth_user WHERE last_login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateJoined($value){
		$sql = 'SELECT * FROM auth_user WHERE date_joined = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUsername($value){
		$sql = 'DELETE FROM auth_user WHERE username = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFirstName($value){
		$sql = 'DELETE FROM auth_user WHERE first_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastName($value){
		$sql = 'DELETE FROM auth_user WHERE last_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM auth_user WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPassword($value){
		$sql = 'DELETE FROM auth_user WHERE password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsStaff($value){
		$sql = 'DELETE FROM auth_user WHERE is_staff = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsActive($value){
		$sql = 'DELETE FROM auth_user WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsSuperuser($value){
		$sql = 'DELETE FROM auth_user WHERE is_superuser = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastLogin($value){
		$sql = 'DELETE FROM auth_user WHERE last_login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateJoined($value){
		$sql = 'DELETE FROM auth_user WHERE date_joined = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuthUserMySql 
	 */
	protected function readRow($row){
		$authUser = new AuthUser();
		
		$authUser->id = $row['id'];
		$authUser->username = $row['username'];
		$authUser->firstName = $row['first_name'];
		$authUser->lastName = $row['last_name'];
		$authUser->email = $row['email'];
		$authUser->password = $row['password'];
		$authUser->isStaff = $row['is_staff'];
		$authUser->isActive = $row['is_active'];
		$authUser->isSuperuser = $row['is_superuser'];
		$authUser->lastLogin = $row['last_login'];
		$authUser->dateJoined = $row['date_joined'];

		return $authUser;
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
	 * @return AuthUserMySql 
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