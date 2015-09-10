<?php
/**
 * Class that operate on table 'shoppingcart_courseregistrationcodeinvoiceitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCourseregistrationcodeinvoiceitemMySqlDAO implements ShoppingcartCourseregistrationcodeinvoiceitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCourseregistrationcodeinvoiceitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcodeinvoiceitem WHERE invoiceitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcodeinvoiceitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcodeinvoiceitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCourseregistrationcodeinvoiceitem primary key
 	 */
	public function delete($invoiceitem_ptr_id){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcodeinvoiceitem WHERE invoiceitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($invoiceitem_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeinvoiceitemMySql shoppingcartCourseregistrationcodeinvoiceitem
 	 */
	public function insert($shoppingcartCourseregistrationcodeinvoiceitem){
		$sql = 'INSERT INTO shoppingcart_courseregistrationcodeinvoiceitem (course_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregistrationcodeinvoiceitem->courseId);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCourseregistrationcodeinvoiceitem->invoiceitemPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeinvoiceitemMySql shoppingcartCourseregistrationcodeinvoiceitem
 	 */
	public function update($shoppingcartCourseregistrationcodeinvoiceitem){
		$sql = 'UPDATE shoppingcart_courseregistrationcodeinvoiceitem SET course_id = ? WHERE invoiceitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregistrationcodeinvoiceitem->courseId);

		$sqlQuery->setNumber($shoppingcartCourseregistrationcodeinvoiceitem->invoiceitemPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcodeinvoiceitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcodeinvoiceitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcodeinvoiceitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCourseregistrationcodeinvoiceitemMySql 
	 */
	protected function readRow($row){
		$shoppingcartCourseregistrationcodeinvoiceitem = new ShoppingcartCourseregistrationcodeinvoiceitem();
		
		$shoppingcartCourseregistrationcodeinvoiceitem->invoiceitemPtrId = $row['invoiceitem_ptr_id'];
		$shoppingcartCourseregistrationcodeinvoiceitem->courseId = $row['course_id'];

		return $shoppingcartCourseregistrationcodeinvoiceitem;
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
	 * @return ShoppingcartCourseregistrationcodeinvoiceitemMySql 
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