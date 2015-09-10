<?php
/**
 * Class that operate on table 'splash_splashconfig'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class SplashSplashconfigMySqlDAO implements SplashSplashconfigDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SplashSplashconfigMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM splash_splashconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM splash_splashconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM splash_splashconfig ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param splashSplashconfig primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM splash_splashconfig WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SplashSplashconfigMySql splashSplashconfig
 	 */
	public function insert($splashSplashconfig){
		$sql = 'INSERT INTO splash_splashconfig (change_date, changed_by_id, enabled, cookie_name, cookie_allowed_values, unaffected_usernames, redirect_url, unaffected_url_paths) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($splashSplashconfig->changeDate);
		$sqlQuery->setNumber($splashSplashconfig->changedById);
		$sqlQuery->setNumber($splashSplashconfig->enabled);
		$sqlQuery->set($splashSplashconfig->cookieName);
		$sqlQuery->set($splashSplashconfig->cookieAllowedValues);
		$sqlQuery->set($splashSplashconfig->unaffectedUsernames);
		$sqlQuery->set($splashSplashconfig->redirectUrl);
		$sqlQuery->set($splashSplashconfig->unaffectedUrlPaths);

		$id = $this->executeInsert($sqlQuery);	
		$splashSplashconfig->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SplashSplashconfigMySql splashSplashconfig
 	 */
	public function update($splashSplashconfig){
		$sql = 'UPDATE splash_splashconfig SET change_date = ?, changed_by_id = ?, enabled = ?, cookie_name = ?, cookie_allowed_values = ?, unaffected_usernames = ?, redirect_url = ?, unaffected_url_paths = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($splashSplashconfig->changeDate);
		$sqlQuery->setNumber($splashSplashconfig->changedById);
		$sqlQuery->setNumber($splashSplashconfig->enabled);
		$sqlQuery->set($splashSplashconfig->cookieName);
		$sqlQuery->set($splashSplashconfig->cookieAllowedValues);
		$sqlQuery->set($splashSplashconfig->unaffectedUsernames);
		$sqlQuery->set($splashSplashconfig->redirectUrl);
		$sqlQuery->set($splashSplashconfig->unaffectedUrlPaths);

		$sqlQuery->setNumber($splashSplashconfig->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM splash_splashconfig';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCookieName($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE cookie_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCookieAllowedValues($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE cookie_allowed_values = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUnaffectedUsernames($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE unaffected_usernames = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRedirectUrl($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE redirect_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUnaffectedUrlPaths($value){
		$sql = 'SELECT * FROM splash_splashconfig WHERE unaffected_url_paths = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCookieName($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE cookie_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCookieAllowedValues($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE cookie_allowed_values = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUnaffectedUsernames($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE unaffected_usernames = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRedirectUrl($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE redirect_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUnaffectedUrlPaths($value){
		$sql = 'DELETE FROM splash_splashconfig WHERE unaffected_url_paths = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SplashSplashconfigMySql 
	 */
	protected function readRow($row){
		$splashSplashconfig = new SplashSplashconfig();
		
		$splashSplashconfig->id = $row['id'];
		$splashSplashconfig->changeDate = $row['change_date'];
		$splashSplashconfig->changedById = $row['changed_by_id'];
		$splashSplashconfig->enabled = $row['enabled'];
		$splashSplashconfig->cookieName = $row['cookie_name'];
		$splashSplashconfig->cookieAllowedValues = $row['cookie_allowed_values'];
		$splashSplashconfig->unaffectedUsernames = $row['unaffected_usernames'];
		$splashSplashconfig->redirectUrl = $row['redirect_url'];
		$splashSplashconfig->unaffectedUrlPaths = $row['unaffected_url_paths'];

		return $splashSplashconfig;
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
	 * @return SplashSplashconfigMySql 
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