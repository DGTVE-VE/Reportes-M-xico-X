<?php
/**
 * Class that operate on table 'edxval_profile'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EdxvalProfileMySqlDAO implements EdxvalProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EdxvalProfileMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM edxval_profile WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM edxval_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM edxval_profile ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param edxvalProfile primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM edxval_profile WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalProfileMySql edxvalProfile
 	 */
	public function insert($edxvalProfile){
		$sql = 'INSERT INTO edxval_profile (profile_name, extension, width, height) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalProfile->profileName);
		$sqlQuery->set($edxvalProfile->extension);
		$sqlQuery->setNumber($edxvalProfile->width);
		$sqlQuery->setNumber($edxvalProfile->height);

		$id = $this->executeInsert($sqlQuery);	
		$edxvalProfile->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalProfileMySql edxvalProfile
 	 */
	public function update($edxvalProfile){
		$sql = 'UPDATE edxval_profile SET profile_name = ?, extension = ?, width = ?, height = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalProfile->profileName);
		$sqlQuery->set($edxvalProfile->extension);
		$sqlQuery->setNumber($edxvalProfile->width);
		$sqlQuery->setNumber($edxvalProfile->height);

		$sqlQuery->setNumber($edxvalProfile->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM edxval_profile';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByProfileName($value){
		$sql = 'SELECT * FROM edxval_profile WHERE profile_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExtension($value){
		$sql = 'SELECT * FROM edxval_profile WHERE extension = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWidth($value){
		$sql = 'SELECT * FROM edxval_profile WHERE width = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHeight($value){
		$sql = 'SELECT * FROM edxval_profile WHERE height = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByProfileName($value){
		$sql = 'DELETE FROM edxval_profile WHERE profile_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExtension($value){
		$sql = 'DELETE FROM edxval_profile WHERE extension = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWidth($value){
		$sql = 'DELETE FROM edxval_profile WHERE width = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHeight($value){
		$sql = 'DELETE FROM edxval_profile WHERE height = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EdxvalProfileMySql 
	 */
	protected function readRow($row){
		$edxvalProfile = new EdxvalProfile();
		
		$edxvalProfile->id = $row['id'];
		$edxvalProfile->profileName = $row['profile_name'];
		$edxvalProfile->extension = $row['extension'];
		$edxvalProfile->width = $row['width'];
		$edxvalProfile->height = $row['height'];

		return $edxvalProfile;
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
	 * @return EdxvalProfileMySql 
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