<?php
/**
 * Class that operate on table 'shoppingcart_couponredemption'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCouponredemptionMySqlDAO implements ShoppingcartCouponredemptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCouponredemptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_couponredemption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_couponredemption';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_couponredemption ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCouponredemption primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_couponredemption WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCouponredemptionMySql shoppingcartCouponredemption
 	 */
	public function insert($shoppingcartCouponredemption){
		$sql = 'INSERT INTO shoppingcart_couponredemption (order_id, user_id, coupon_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartCouponredemption->orderId);
		$sqlQuery->setNumber($shoppingcartCouponredemption->userId);
		$sqlQuery->setNumber($shoppingcartCouponredemption->couponId);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCouponredemption->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCouponredemptionMySql shoppingcartCouponredemption
 	 */
	public function update($shoppingcartCouponredemption){
		$sql = 'UPDATE shoppingcart_couponredemption SET order_id = ?, user_id = ?, coupon_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartCouponredemption->orderId);
		$sqlQuery->setNumber($shoppingcartCouponredemption->userId);
		$sqlQuery->setNumber($shoppingcartCouponredemption->couponId);

		$sqlQuery->setNumber($shoppingcartCouponredemption->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_couponredemption';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrderId($value){
		$sql = 'SELECT * FROM shoppingcart_couponredemption WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM shoppingcart_couponredemption WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCouponId($value){
		$sql = 'SELECT * FROM shoppingcart_couponredemption WHERE coupon_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrderId($value){
		$sql = 'DELETE FROM shoppingcart_couponredemption WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM shoppingcart_couponredemption WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCouponId($value){
		$sql = 'DELETE FROM shoppingcart_couponredemption WHERE coupon_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCouponredemptionMySql 
	 */
	protected function readRow($row){
		$shoppingcartCouponredemption = new ShoppingcartCouponredemption();
		
		$shoppingcartCouponredemption->id = $row['id'];
		$shoppingcartCouponredemption->orderId = $row['order_id'];
		$shoppingcartCouponredemption->userId = $row['user_id'];
		$shoppingcartCouponredemption->couponId = $row['coupon_id'];

		return $shoppingcartCouponredemption;
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
	 * @return ShoppingcartCouponredemptionMySql 
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