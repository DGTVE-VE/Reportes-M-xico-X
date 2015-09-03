<?php
/**
 * Class that operate on table 'shoppingcart_paidcourseregistration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartPaidcourseregistrationMySqlDAO implements ShoppingcartPaidcourseregistrationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartPaidcourseregistrationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartPaidcourseregistration primary key
 	 */
	public function delete($orderitem_ptr_id){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistration WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($orderitem_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationMySql shoppingcartPaidcourseregistration
 	 */
	public function insert($shoppingcartPaidcourseregistration){
		$sql = 'INSERT INTO shoppingcart_paidcourseregistration (course_id, mode, course_enrollment_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartPaidcourseregistration->courseId);
		$sqlQuery->set($shoppingcartPaidcourseregistration->mode);
		$sqlQuery->setNumber($shoppingcartPaidcourseregistration->courseEnrollmentId);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartPaidcourseregistration->orderitemPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationMySql shoppingcartPaidcourseregistration
 	 */
	public function update($shoppingcartPaidcourseregistration){
		$sql = 'UPDATE shoppingcart_paidcourseregistration SET course_id = ?, mode = ?, course_enrollment_id = ? WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartPaidcourseregistration->courseId);
		$sqlQuery->set($shoppingcartPaidcourseregistration->mode);
		$sqlQuery->setNumber($shoppingcartPaidcourseregistration->courseEnrollmentId);

		$sqlQuery->setNumber($shoppingcartPaidcourseregistration->orderitemPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMode($value){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseEnrollmentId($value){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistration WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistration WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMode($value){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistration WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseEnrollmentId($value){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistration WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartPaidcourseregistrationMySql 
	 */
	protected function readRow($row){
		$shoppingcartPaidcourseregistration = new ShoppingcartPaidcourseregistration();
		
		$shoppingcartPaidcourseregistration->orderitemPtrId = $row['orderitem_ptr_id'];
		$shoppingcartPaidcourseregistration->courseId = $row['course_id'];
		$shoppingcartPaidcourseregistration->mode = $row['mode'];
		$shoppingcartPaidcourseregistration->courseEnrollmentId = $row['course_enrollment_id'];

		return $shoppingcartPaidcourseregistration;
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
	 * @return ShoppingcartPaidcourseregistrationMySql 
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