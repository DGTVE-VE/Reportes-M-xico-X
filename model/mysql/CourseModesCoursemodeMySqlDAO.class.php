<?php
/**
 * Class that operate on table 'course_modes_coursemode'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class CourseModesCoursemodeMySqlDAO implements CourseModesCoursemodeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CourseModesCoursemodeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM course_modes_coursemode';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM course_modes_coursemode ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param courseModesCoursemode primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM course_modes_coursemode WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CourseModesCoursemodeMySql courseModesCoursemode
 	 */
	public function insert($courseModesCoursemode){
		$sql = 'INSERT INTO course_modes_coursemode (course_id, mode_slug, mode_display_name, min_price, suggested_prices, currency, expiration_date, expiration_datetime, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseModesCoursemode->courseId);
		$sqlQuery->set($courseModesCoursemode->modeSlug);
		$sqlQuery->set($courseModesCoursemode->modeDisplayName);
		$sqlQuery->setNumber($courseModesCoursemode->minPrice);
		$sqlQuery->set($courseModesCoursemode->suggestedPrices);
		$sqlQuery->set($courseModesCoursemode->currency);
		$sqlQuery->set($courseModesCoursemode->expirationDate);
		$sqlQuery->set($courseModesCoursemode->expirationDatetime);
		$sqlQuery->set($courseModesCoursemode->description);

		$id = $this->executeInsert($sqlQuery);	
		$courseModesCoursemode->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CourseModesCoursemodeMySql courseModesCoursemode
 	 */
	public function update($courseModesCoursemode){
		$sql = 'UPDATE course_modes_coursemode SET course_id = ?, mode_slug = ?, mode_display_name = ?, min_price = ?, suggested_prices = ?, currency = ?, expiration_date = ?, expiration_datetime = ?, description = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($courseModesCoursemode->courseId);
		$sqlQuery->set($courseModesCoursemode->modeSlug);
		$sqlQuery->set($courseModesCoursemode->modeDisplayName);
		$sqlQuery->setNumber($courseModesCoursemode->minPrice);
		$sqlQuery->set($courseModesCoursemode->suggestedPrices);
		$sqlQuery->set($courseModesCoursemode->currency);
		$sqlQuery->set($courseModesCoursemode->expirationDate);
		$sqlQuery->set($courseModesCoursemode->expirationDatetime);
		$sqlQuery->set($courseModesCoursemode->description);

		$sqlQuery->setNumber($courseModesCoursemode->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM course_modes_coursemode';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeSlug($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeDisplayName($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE mode_display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinPrice($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE min_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySuggestedPrices($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE suggested_prices = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpirationDate($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpirationDatetime($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE expiration_datetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM course_modes_coursemode WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeSlug($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeDisplayName($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE mode_display_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinPrice($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE min_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySuggestedPrices($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE suggested_prices = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpirationDate($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpirationDatetime($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE expiration_datetime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM course_modes_coursemode WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CourseModesCoursemodeMySql 
	 */
	protected function readRow($row){
		$courseModesCoursemode = new CourseModesCoursemode();
		
		$courseModesCoursemode->id = $row['id'];
		$courseModesCoursemode->courseId = $row['course_id'];
		$courseModesCoursemode->modeSlug = $row['mode_slug'];
		$courseModesCoursemode->modeDisplayName = $row['mode_display_name'];
		$courseModesCoursemode->minPrice = $row['min_price'];
		$courseModesCoursemode->suggestedPrices = $row['suggested_prices'];
		$courseModesCoursemode->currency = $row['currency'];
		$courseModesCoursemode->expirationDate = $row['expiration_date'];
		$courseModesCoursemode->expirationDatetime = $row['expiration_datetime'];
		$courseModesCoursemode->description = $row['description'];

		return $courseModesCoursemode;
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
	 * @return CourseModesCoursemodeMySql 
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