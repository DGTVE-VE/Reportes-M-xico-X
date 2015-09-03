<?php
/**
 * Class that operate on table 'auth_userprofile'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class AuthUserprofileMySqlDAO implements AuthUserprofileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuthUserprofileMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auth_userprofile WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auth_userprofile';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auth_userprofile ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param authUserprofile primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM auth_userprofile WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuthUserprofileMySql authUserprofile
 	 */
	public function insert($authUserprofile){
		$sql = 'INSERT INTO auth_userprofile (user_id, name, language, location, meta, courseware, gender, mailing_address, year_of_birth, level_of_education, goals, allow_certificate, country, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authUserprofile->userId);
		$sqlQuery->set($authUserprofile->name);
		$sqlQuery->set($authUserprofile->language);
		$sqlQuery->set($authUserprofile->location);
		$sqlQuery->set($authUserprofile->meta);
		$sqlQuery->set($authUserprofile->courseware);
		$sqlQuery->set($authUserprofile->gender);
		$sqlQuery->set($authUserprofile->mailingAddress);
		$sqlQuery->setNumber($authUserprofile->yearOfBirth);
		$sqlQuery->set($authUserprofile->levelOfEducation);
		$sqlQuery->set($authUserprofile->goals);
		$sqlQuery->setNumber($authUserprofile->allowCertificate);
		$sqlQuery->set($authUserprofile->country);
		$sqlQuery->set($authUserprofile->city);

		$id = $this->executeInsert($sqlQuery);	
		$authUserprofile->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuthUserprofileMySql authUserprofile
 	 */
	public function update($authUserprofile){
		$sql = 'UPDATE auth_userprofile SET user_id = ?, name = ?, language = ?, location = ?, meta = ?, courseware = ?, gender = ?, mailing_address = ?, year_of_birth = ?, level_of_education = ?, goals = ?, allow_certificate = ?, country = ?, city = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($authUserprofile->userId);
		$sqlQuery->set($authUserprofile->name);
		$sqlQuery->set($authUserprofile->language);
		$sqlQuery->set($authUserprofile->location);
		$sqlQuery->set($authUserprofile->meta);
		$sqlQuery->set($authUserprofile->courseware);
		$sqlQuery->set($authUserprofile->gender);
		$sqlQuery->set($authUserprofile->mailingAddress);
		$sqlQuery->setNumber($authUserprofile->yearOfBirth);
		$sqlQuery->set($authUserprofile->levelOfEducation);
		$sqlQuery->set($authUserprofile->goals);
		$sqlQuery->setNumber($authUserprofile->allowCertificate);
		$sqlQuery->set($authUserprofile->country);
		$sqlQuery->set($authUserprofile->city);

		$sqlQuery->setNumber($authUserprofile->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auth_userprofile';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLanguage($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE language = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocation($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE location = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMeta($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE meta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseware($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE courseware = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGender($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMailingAddress($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE mailing_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByYearOfBirth($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE year_of_birth = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLevelOfEducation($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE level_of_education = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGoals($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE goals = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAllowCertificate($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE allow_certificate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCountry($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCity($value){
		$sql = 'SELECT * FROM auth_userprofile WHERE city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM auth_userprofile WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM auth_userprofile WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLanguage($value){
		$sql = 'DELETE FROM auth_userprofile WHERE language = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocation($value){
		$sql = 'DELETE FROM auth_userprofile WHERE location = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMeta($value){
		$sql = 'DELETE FROM auth_userprofile WHERE meta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseware($value){
		$sql = 'DELETE FROM auth_userprofile WHERE courseware = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGender($value){
		$sql = 'DELETE FROM auth_userprofile WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMailingAddress($value){
		$sql = 'DELETE FROM auth_userprofile WHERE mailing_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByYearOfBirth($value){
		$sql = 'DELETE FROM auth_userprofile WHERE year_of_birth = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLevelOfEducation($value){
		$sql = 'DELETE FROM auth_userprofile WHERE level_of_education = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGoals($value){
		$sql = 'DELETE FROM auth_userprofile WHERE goals = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAllowCertificate($value){
		$sql = 'DELETE FROM auth_userprofile WHERE allow_certificate = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCountry($value){
		$sql = 'DELETE FROM auth_userprofile WHERE country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCity($value){
		$sql = 'DELETE FROM auth_userprofile WHERE city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuthUserprofileMySql 
	 */
	protected function readRow($row){
		$authUserprofile = new AuthUserprofile();
		
		$authUserprofile->id = $row['id'];
		$authUserprofile->userId = $row['user_id'];
		$authUserprofile->name = $row['name'];
		$authUserprofile->language = $row['language'];
		$authUserprofile->location = $row['location'];
		$authUserprofile->meta = $row['meta'];
		$authUserprofile->courseware = $row['courseware'];
		$authUserprofile->gender = $row['gender'];
		$authUserprofile->mailingAddress = $row['mailing_address'];
		$authUserprofile->yearOfBirth = $row['year_of_birth'];
		$authUserprofile->levelOfEducation = $row['level_of_education'];
		$authUserprofile->goals = $row['goals'];
		$authUserprofile->allowCertificate = $row['allow_certificate'];
		$authUserprofile->country = $row['country'];
		$authUserprofile->city = $row['city'];

		return $authUserprofile;
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
	 * @return AuthUserprofileMySql 
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