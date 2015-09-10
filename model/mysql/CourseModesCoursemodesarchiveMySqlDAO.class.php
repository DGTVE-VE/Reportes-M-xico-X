<?php
/**
 * Class that operate on table 'course_modes_coursemodesarchive'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseModesCoursemodesarchiveMySqlDAO implements CourseModesCoursemodesarchiveDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseModesCoursemodesarchiveMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseModesCoursemodesarchive primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseModesCoursemodesarchiveMySql courseModesCoursemodesarchive
 	 */
	public function insert($courseModesCoursemodesarchive){
		$sql = 'INSERT INTO course_modes_coursemodesarchive (course_id, mode_slug, mode_display_name, min_price, suggested_prices, currency, expiration_date, expiration_datetime) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseModesCoursemodesarchive->courseId);
		$sqlQuery->set($courseModesCoursemodesarchive->modeSlug);
		$sqlQuery->set($courseModesCoursemodesarchive->modeDisplayName);
		$sqlQuery->setNumber($courseModesCoursemodesarchive->minPrice);
		$sqlQuery->set($courseModesCoursemodesarchive->suggestedPrices);
		$sqlQuery->set($courseModesCoursemodesarchive->currency);
		$sqlQuery->set($courseModesCoursemodesarchive->expirationDate);
		$sqlQuery->set($courseModesCoursemodesarchive->expirationDatetime);

		$id = $this->executeInsert($sqlQuery);	
		$courseModesCoursemodesarchive->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseModesCoursemodesarchiveMySql courseModesCoursemodesarchive
 	 */
	public function update($courseModesCoursemodesarchive){
		$sql = 'UPDATE course_modes_coursemodesarchive SET course_id = ?, mode_slug = ?, mode_display_name = ?, min_price = ?, suggested_prices = ?, currency = ?, expiration_date = ?, expiration_datetime = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseModesCoursemodesarchive->courseId);
		$sqlQuery->set($courseModesCoursemodesarchive->modeSlug);
		$sqlQuery->set($courseModesCoursemodesarchive->modeDisplayName);
		$sqlQuery->setNumber($courseModesCoursemodesarchive->minPrice);
		$sqlQuery->set($courseModesCoursemodesarchive->suggestedPrices);
		$sqlQuery->set($courseModesCoursemodesarchive->currency);
		$sqlQuery->set($courseModesCoursemodesarchive->expirationDate);
		$sqlQuery->set($courseModesCoursemodesarchive->expirationDatetime);

		$sqlQuery->setNumber($courseModesCoursemodesarchive->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_modes_coursemodesarchive';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeSlug($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeDisplayName($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE mode_display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinPrice($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE min_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySuggestedPrices($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE suggested_prices = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpirationDate($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpirationDatetime($value){
		$sql = 'SELECT * FROM course_modes_coursemodesarchive WHERE expiration_datetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeSlug($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeDisplayName($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE mode_display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinPrice($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE min_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySuggestedPrices($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE suggested_prices = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpirationDate($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpirationDatetime($value){
		$sql = 'DELETE FROM course_modes_coursemodesarchive WHERE expiration_datetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseModesCoursemodesarchiveMySql 
	 */
	protected function readRow($row){
		$courseModesCoursemodesarchive = new CourseModesCoursemodesarchive();
		
		$courseModesCoursemodesarchive->id = $row['id'];
		$courseModesCoursemodesarchive->courseId = $row['course_id'];
		$courseModesCoursemodesarchive->modeSlug = $row['mode_slug'];
		$courseModesCoursemodesarchive->modeDisplayName = $row['mode_display_name'];
		$courseModesCoursemodesarchive->minPrice = $row['min_price'];
		$courseModesCoursemodesarchive->suggestedPrices = $row['suggested_prices'];
		$courseModesCoursemodesarchive->currency = $row['currency'];
		$courseModesCoursemodesarchive->expirationDate = $row['expiration_date'];
		$courseModesCoursemodesarchive->expirationDatetime = $row['expiration_datetime'];

		return $courseModesCoursemodesarchive;
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
	 * @return CourseModesCoursemodesarchiveMySql 
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