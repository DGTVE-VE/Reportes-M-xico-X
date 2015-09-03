<?php
/**
 * Class that operate on table 'shoppingcart_courseregcodeitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCourseregcodeitemMySqlDAO implements ShoppingcartCourseregcodeitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCourseregcodeitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitem WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCourseregcodeitem primary key
 	 */
	public function delete($orderitem_ptr_id){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitem WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($orderitem_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregcodeitemMySql shoppingcartCourseregcodeitem
 	 */
	public function insert($shoppingcartCourseregcodeitem){
		$sql = 'INSERT INTO shoppingcart_courseregcodeitem (course_id, mode) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregcodeitem->courseId);
		$sqlQuery->set($shoppingcartCourseregcodeitem->mode);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCourseregcodeitem->orderitemPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregcodeitemMySql shoppingcartCourseregcodeitem
 	 */
	public function update($shoppingcartCourseregcodeitem){
		$sql = 'UPDATE shoppingcart_courseregcodeitem SET course_id = ?, mode = ? WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregcodeitem->courseId);
		$sqlQuery->set($shoppingcartCourseregcodeitem->mode);

		$sqlQuery->setNumber($shoppingcartCourseregcodeitem->orderitemPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMode($value){
		$sql = 'SELECT * FROM shoppingcart_courseregcodeitem WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMode($value){
		$sql = 'DELETE FROM shoppingcart_courseregcodeitem WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCourseregcodeitemMySql 
	 */
	protected function readRow($row){
		$shoppingcartCourseregcodeitem = new ShoppingcartCourseregcodeitem();
		
		$shoppingcartCourseregcodeitem->orderitemPtrId = $row['orderitem_ptr_id'];
		$shoppingcartCourseregcodeitem->courseId = $row['course_id'];
		$shoppingcartCourseregcodeitem->mode = $row['mode'];

		return $shoppingcartCourseregcodeitem;
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
	 * @return ShoppingcartCourseregcodeitemMySql 
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