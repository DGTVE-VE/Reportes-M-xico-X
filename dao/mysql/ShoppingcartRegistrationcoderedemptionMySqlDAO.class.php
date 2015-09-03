<?php
/**
 * Class that operate on table 'shoppingcart_registrationcoderedemption'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartRegistrationcoderedemptionMySqlDAO implements ShoppingcartRegistrationcoderedemptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartRegistrationcoderedemptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartRegistrationcoderedemption primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartRegistrationcoderedemptionMySql shoppingcartRegistrationcoderedemption
 	 */
	public function insert($shoppingcartRegistrationcoderedemption){
		$sql = 'INSERT INTO shoppingcart_registrationcoderedemption (order_id, registration_code_id, redeemed_by_id, redeemed_at, course_enrollment_id) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->orderId);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->registrationCodeId);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->redeemedById);
		$sqlQuery->set($shoppingcartRegistrationcoderedemption->redeemedAt);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->courseEnrollmentId);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartRegistrationcoderedemption->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartRegistrationcoderedemptionMySql shoppingcartRegistrationcoderedemption
 	 */
	public function update($shoppingcartRegistrationcoderedemption){
		$sql = 'UPDATE shoppingcart_registrationcoderedemption SET order_id = ?, registration_code_id = ?, redeemed_by_id = ?, redeemed_at = ?, course_enrollment_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->orderId);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->registrationCodeId);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->redeemedById);
		$sqlQuery->set($shoppingcartRegistrationcoderedemption->redeemedAt);
		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->courseEnrollmentId);

		$sqlQuery->setNumber($shoppingcartRegistrationcoderedemption->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrderId($value){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRegistrationCodeId($value){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE registration_code_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRedeemedById($value){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE redeemed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRedeemedAt($value){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE redeemed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseEnrollmentId($value){
		$sql = 'SELECT * FROM shoppingcart_registrationcoderedemption WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrderId($value){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRegistrationCodeId($value){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE registration_code_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRedeemedById($value){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE redeemed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRedeemedAt($value){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE redeemed_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseEnrollmentId($value){
		$sql = 'DELETE FROM shoppingcart_registrationcoderedemption WHERE course_enrollment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartRegistrationcoderedemptionMySql 
	 */
	protected function readRow($row){
		$shoppingcartRegistrationcoderedemption = new ShoppingcartRegistrationcoderedemption();
		
		$shoppingcartRegistrationcoderedemption->id = $row['id'];
		$shoppingcartRegistrationcoderedemption->orderId = $row['order_id'];
		$shoppingcartRegistrationcoderedemption->registrationCodeId = $row['registration_code_id'];
		$shoppingcartRegistrationcoderedemption->redeemedById = $row['redeemed_by_id'];
		$shoppingcartRegistrationcoderedemption->redeemedAt = $row['redeemed_at'];
		$shoppingcartRegistrationcoderedemption->courseEnrollmentId = $row['course_enrollment_id'];

		return $shoppingcartRegistrationcoderedemption;
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
	 * @return ShoppingcartRegistrationcoderedemptionMySql 
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