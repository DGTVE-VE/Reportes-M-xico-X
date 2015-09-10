<?php
/**
 * Class that operate on table 'shoppingcart_courseregcodeitemannotation'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCourseregcodeitemannotationMySqlDAO implements ShoppingcartCourseregcodeitemannotationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCourseregcodeitemannotationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitemannotation WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitemannotation';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitemannotation ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCourseregcodeitemannotation primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitemannotation WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregcodeitemannotationMySql shoppingcartCourseregcodeitemannotation
 	 */
	public function insert($shoppingcartCourseregcodeitemannotation){
		$sql = 'INSERT INTO shoppingcart_courseregcodeitemannotation (course_id, annotation) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregcodeitemannotation->courseId);
		$sqlQuery->set($shoppingcartCourseregcodeitemannotation->annotation);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCourseregcodeitemannotation->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregcodeitemannotationMySql shoppingcartCourseregcodeitemannotation
 	 */
	public function update($shoppingcartCourseregcodeitemannotation){
		$sql = 'UPDATE shoppingcart_courseregcodeitemannotation SET course_id = ?, annotation = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregcodeitemannotation->courseId);
		$sqlQuery->set($shoppingcartCourseregcodeitemannotation->annotation);

		$sqlQuery->setNumber($shoppingcartCourseregcodeitemannotation->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitemannotation';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitemannotation WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnnotation($value){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitemannotation WHERE annotation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitemannotation WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnnotation($value){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitemannotation WHERE annotation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCourseregcodeitemannotationMySql 
	 */
	protected function readRow($row){
		$shoppingcartCourseregcodeitemannotation = new ShoppingcartCourseregcodeitemannotation();
		
		$shoppingcartCourseregcodeitemannotation->id = $row['id'];
		$shoppingcartCourseregcodeitemannotation->courseId = $row['course_id'];
		$shoppingcartCourseregcodeitemannotation->annotation = $row['annotation'];

		return $shoppingcartCourseregcodeitemannotation;
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
	 * @return ShoppingcartCourseregcodeitemannotationMySql 
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