<?php
/**
 * Class that operate on table 'shoppingcart_coupon'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCouponMySqlDAO implements ShoppingcartCouponDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCouponMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_coupon';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_coupon ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCoupon primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCouponMySql shoppingcartCoupon
 	 */
	public function insert($shoppingcartCoupon){
		$sql = 'INSERT INTO shoppingcart_coupon (code, description, course_id, percentage_discount, created_by_id, created_at, is_active, expiration_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCoupon->code);
		$sqlQuery->set($shoppingcartCoupon->description);
		$sqlQuery->set($shoppingcartCoupon->courseId);
		$sqlQuery->setNumber($shoppingcartCoupon->percentageDiscount);
		$sqlQuery->setNumber($shoppingcartCoupon->createdById);
		$sqlQuery->set($shoppingcartCoupon->createdAt);
		$sqlQuery->setNumber($shoppingcartCoupon->isActive);
		$sqlQuery->set($shoppingcartCoupon->expirationDate);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCoupon->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCouponMySql shoppingcartCoupon
 	 */
	public function update($shoppingcartCoupon){
		$sql = 'UPDATE shoppingcart_coupon SET code = ?, description = ?, course_id = ?, percentage_discount = ?, created_by_id = ?, created_at = ?, is_active = ?, expiration_date = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCoupon->code);
		$sqlQuery->set($shoppingcartCoupon->description);
		$sqlQuery->set($shoppingcartCoupon->courseId);
		$sqlQuery->setNumber($shoppingcartCoupon->percentageDiscount);
		$sqlQuery->setNumber($shoppingcartCoupon->createdById);
		$sqlQuery->set($shoppingcartCoupon->createdAt);
		$sqlQuery->setNumber($shoppingcartCoupon->isActive);
		$sqlQuery->set($shoppingcartCoupon->expirationDate);

		$sqlQuery->setNumber($shoppingcartCoupon->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_coupon';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCode($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPercentageDiscount($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE percentage_discount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedById($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsActive($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpirationDate($value){
		$sql = 'SELECT * FROM shoppingcart_coupon WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCode($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPercentageDiscount($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE percentage_discount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedById($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsActive($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE is_active = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpirationDate($value){
		$sql = 'DELETE FROM shoppingcart_coupon WHERE expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCouponMySql 
	 */
	protected function readRow($row){
		$shoppingcartCoupon = new ShoppingcartCoupon();
		
		$shoppingcartCoupon->id = $row['id'];
		$shoppingcartCoupon->code = $row['code'];
		$shoppingcartCoupon->description = $row['description'];
		$shoppingcartCoupon->courseId = $row['course_id'];
		$shoppingcartCoupon->percentageDiscount = $row['percentage_discount'];
		$shoppingcartCoupon->createdById = $row['created_by_id'];
		$shoppingcartCoupon->createdAt = $row['created_at'];
		$shoppingcartCoupon->isActive = $row['is_active'];
		$shoppingcartCoupon->expirationDate = $row['expiration_date'];

		return $shoppingcartCoupon;
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
	 * @return ShoppingcartCouponMySql 
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