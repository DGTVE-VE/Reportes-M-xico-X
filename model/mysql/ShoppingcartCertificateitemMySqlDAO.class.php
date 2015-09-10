<?php
/**
 * Class that operate on table 'shoppingcart_certificateitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCertificateitemMySqlDAO implements ShoppingcartCertificateitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCertificateitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_certificateitem WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_certificateitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_certificateitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCertificateitem primary key
 	 */
	public function delete($orderitem_ptr_id){
		$sql = 'DELETE FROM shoppingcart_certificateitem WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($orderitem_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCertificateitemMySql shoppingcartCertificateitem
 	 */
	public function insert($shoppingcartCertificateitem){
		$sql = 'INSERT INTO shoppingcart_certificateitem (course_id, course_enrollment_id, mode) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCertificateitem->courseId);
		$sqlQuery->setNumber($shoppingcartCertificateitem->courseEnrollmentId);
		$sqlQuery->set($shoppingcartCertificateitem->mode);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCertificateitem->orderitemPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCertificateitemMySql shoppingcartCertificateitem
 	 */
	public function update($shoppingcartCertificateitem){
		$sql = 'UPDATE shoppingcart_certificateitem SET course_id = ?, course_enrollment_id = ?, mode = ? WHERE orderitem_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCertificateitem->courseId);
		$sqlQuery->setNumber($shoppingcartCertificateitem->courseEnrollmentId);
		$sqlQuery->set($shoppingcartCertificateitem->mode);

		$sqlQuery->setNumber($shoppingcartCertificateitem->orderitemPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_certificateitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_certificateitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseEnrollmentId($value){
		$sql = 'SELECT * FROM shoppingcart_certificateitem WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMode($value){
		$sql = 'SELECT * FROM shoppingcart_certificateitem WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_certificateitem WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseEnrollmentId($value){
		$sql = 'DELETE FROM shoppingcart_certificateitem WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMode($value){
		$sql = 'DELETE FROM shoppingcart_certificateitem WHERE mode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCertificateitemMySql 
	 */
	protected function readRow($row){
		$shoppingcartCertificateitem = new ShoppingcartCertificateitem();
		
		$shoppingcartCertificateitem->orderitemPtrId = $row['orderitem_ptr_id'];
		$shoppingcartCertificateitem->courseId = $row['course_id'];
		$shoppingcartCertificateitem->courseEnrollmentId = $row['course_enrollment_id'];
		$shoppingcartCertificateitem->mode = $row['mode'];

		return $shoppingcartCertificateitem;
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
	 * @return ShoppingcartCertificateitemMySql 
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