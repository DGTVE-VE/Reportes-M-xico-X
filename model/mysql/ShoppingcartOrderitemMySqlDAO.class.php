<?php
/**
 * Class that operate on table 'shoppingcart_orderitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartOrderitemMySqlDAO implements ShoppingcartOrderitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartOrderitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_orderitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_orderitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartOrderitem primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartOrderitemMySql shoppingcartOrderitem
 	 */
	public function insert($shoppingcartOrderitem){
		$sql = 'INSERT INTO shoppingcart_orderitem (order_id, user_id, status, qty, unit_cost, line_desc, currency, fulfilled_time, report_comments, refund_requested_time, service_fee, list_price, created, modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartOrderitem->orderId);
		$sqlQuery->setNumber($shoppingcartOrderitem->userId);
		$sqlQuery->set($shoppingcartOrderitem->status);
		$sqlQuery->setNumber($shoppingcartOrderitem->qty);
		$sqlQuery->set($shoppingcartOrderitem->unitCost);
		$sqlQuery->set($shoppingcartOrderitem->lineDesc);
		$sqlQuery->set($shoppingcartOrderitem->currency);
		$sqlQuery->set($shoppingcartOrderitem->fulfilledTime);
		$sqlQuery->set($shoppingcartOrderitem->reportComments);
		$sqlQuery->set($shoppingcartOrderitem->refundRequestedTime);
		$sqlQuery->set($shoppingcartOrderitem->serviceFee);
		$sqlQuery->set($shoppingcartOrderitem->listPrice);
		$sqlQuery->set($shoppingcartOrderitem->created);
		$sqlQuery->set($shoppingcartOrderitem->modified);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartOrderitem->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartOrderitemMySql shoppingcartOrderitem
 	 */
	public function update($shoppingcartOrderitem){
		$sql = 'UPDATE shoppingcart_orderitem SET order_id = ?, user_id = ?, status = ?, qty = ?, unit_cost = ?, line_desc = ?, currency = ?, fulfilled_time = ?, report_comments = ?, refund_requested_time = ?, service_fee = ?, list_price = ?, created = ?, modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartOrderitem->orderId);
		$sqlQuery->setNumber($shoppingcartOrderitem->userId);
		$sqlQuery->set($shoppingcartOrderitem->status);
		$sqlQuery->setNumber($shoppingcartOrderitem->qty);
		$sqlQuery->set($shoppingcartOrderitem->unitCost);
		$sqlQuery->set($shoppingcartOrderitem->lineDesc);
		$sqlQuery->set($shoppingcartOrderitem->currency);
		$sqlQuery->set($shoppingcartOrderitem->fulfilledTime);
		$sqlQuery->set($shoppingcartOrderitem->reportComments);
		$sqlQuery->set($shoppingcartOrderitem->refundRequestedTime);
		$sqlQuery->set($shoppingcartOrderitem->serviceFee);
		$sqlQuery->set($shoppingcartOrderitem->listPrice);
		$sqlQuery->set($shoppingcartOrderitem->created);
		$sqlQuery->set($shoppingcartOrderitem->modified);

		$sqlQuery->setNumber($shoppingcartOrderitem->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_orderitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOrderId($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQty($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE qty = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUnitCost($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE unit_cost = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLineDesc($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE line_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFulfilledTime($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE fulfilled_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByReportComments($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE report_comments = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRefundRequestedTime($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE refund_requested_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByServiceFee($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE service_fee = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByListPrice($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE list_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM shoppingcart_orderitem WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOrderId($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUserId($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQty($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE qty = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUnitCost($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE unit_cost = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLineDesc($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE line_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFulfilledTime($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE fulfilled_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByReportComments($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE report_comments = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRefundRequestedTime($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE refund_requested_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByServiceFee($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE service_fee = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByListPrice($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE list_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM shoppingcart_orderitem WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartOrderitemMySql 
	 */
	protected function readRow($row){
		$shoppingcartOrderitem = new ShoppingcartOrderitem();
		
		$shoppingcartOrderitem->id = $row['id'];
		$shoppingcartOrderitem->orderId = $row['order_id'];
		$shoppingcartOrderitem->userId = $row['user_id'];
		$shoppingcartOrderitem->status = $row['status'];
		$shoppingcartOrderitem->qty = $row['qty'];
		$shoppingcartOrderitem->unitCost = $row['unit_cost'];
		$shoppingcartOrderitem->lineDesc = $row['line_desc'];
		$shoppingcartOrderitem->currency = $row['currency'];
		$shoppingcartOrderitem->fulfilledTime = $row['fulfilled_time'];
		$shoppingcartOrderitem->reportComments = $row['report_comments'];
		$shoppingcartOrderitem->refundRequestedTime = $row['refund_requested_time'];
		$shoppingcartOrderitem->serviceFee = $row['service_fee'];
		$shoppingcartOrderitem->listPrice = $row['list_price'];
		$shoppingcartOrderitem->created = $row['created'];
		$shoppingcartOrderitem->modified = $row['modified'];

		return $shoppingcartOrderitem;
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
	 * @return ShoppingcartOrderitemMySql 
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