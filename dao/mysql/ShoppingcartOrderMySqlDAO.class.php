<?php
/**
 * Class that operate on table 'shoppingcart_order'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartOrderMySqlDAO implements ShoppingcartOrderDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartOrderMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_order WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_order';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_order ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartOrder primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_order WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartOrderMySql shoppingcartOrder
 	 */
	public function insert($shoppingcartOrder){
		$sql = 'INSERT INTO shoppingcart_order (user_id, currency, status, purchase_time, bill_to_first, bill_to_last, bill_to_street1, bill_to_street2, bill_to_city, bill_to_state, bill_to_postalcode, bill_to_country, bill_to_ccnum, bill_to_cardtype, processor_reply_dump, refunded_time, company_name, company_contact_name, company_contact_email, recipient_name, recipient_email, customer_reference_number, order_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartOrder->userId);
		$sqlQuery->set($shoppingcartOrder->currency);
		$sqlQuery->set($shoppingcartOrder->status);
		$sqlQuery->set($shoppingcartOrder->purchaseTime);
		$sqlQuery->set($shoppingcartOrder->billToFirst);
		$sqlQuery->set($shoppingcartOrder->billToLast);
		$sqlQuery->set($shoppingcartOrder->billToStreet1);
		$sqlQuery->set($shoppingcartOrder->billToStreet2);
		$sqlQuery->set($shoppingcartOrder->billToCity);
		$sqlQuery->set($shoppingcartOrder->billToState);
		$sqlQuery->set($shoppingcartOrder->billToPostalcode);
		$sqlQuery->set($shoppingcartOrder->billToCountry);
		$sqlQuery->set($shoppingcartOrder->billToCcnum);
		$sqlQuery->set($shoppingcartOrder->billToCardtype);
		$sqlQuery->set($shoppingcartOrder->processorReplyDump);
		$sqlQuery->set($shoppingcartOrder->refundedTime);
		$sqlQuery->set($shoppingcartOrder->companyName);
		$sqlQuery->set($shoppingcartOrder->companyContactName);
		$sqlQuery->set($shoppingcartOrder->companyContactEmail);
		$sqlQuery->set($shoppingcartOrder->recipientName);
		$sqlQuery->set($shoppingcartOrder->recipientEmail);
		$sqlQuery->set($shoppingcartOrder->customerReferenceNumber);
		$sqlQuery->set($shoppingcartOrder->orderType);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartOrder->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartOrderMySql shoppingcartOrder
 	 */
	public function update($shoppingcartOrder){
		$sql = 'UPDATE shoppingcart_order SET user_id = ?, currency = ?, status = ?, purchase_time = ?, bill_to_first = ?, bill_to_last = ?, bill_to_street1 = ?, bill_to_street2 = ?, bill_to_city = ?, bill_to_state = ?, bill_to_postalcode = ?, bill_to_country = ?, bill_to_ccnum = ?, bill_to_cardtype = ?, processor_reply_dump = ?, refunded_time = ?, company_name = ?, company_contact_name = ?, company_contact_email = ?, recipient_name = ?, recipient_email = ?, customer_reference_number = ?, order_type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($shoppingcartOrder->userId);
		$sqlQuery->set($shoppingcartOrder->currency);
		$sqlQuery->set($shoppingcartOrder->status);
		$sqlQuery->set($shoppingcartOrder->purchaseTime);
		$sqlQuery->set($shoppingcartOrder->billToFirst);
		$sqlQuery->set($shoppingcartOrder->billToLast);
		$sqlQuery->set($shoppingcartOrder->billToStreet1);
		$sqlQuery->set($shoppingcartOrder->billToStreet2);
		$sqlQuery->set($shoppingcartOrder->billToCity);
		$sqlQuery->set($shoppingcartOrder->billToState);
		$sqlQuery->set($shoppingcartOrder->billToPostalcode);
		$sqlQuery->set($shoppingcartOrder->billToCountry);
		$sqlQuery->set($shoppingcartOrder->billToCcnum);
		$sqlQuery->set($shoppingcartOrder->billToCardtype);
		$sqlQuery->set($shoppingcartOrder->processorReplyDump);
		$sqlQuery->set($shoppingcartOrder->refundedTime);
		$sqlQuery->set($shoppingcartOrder->companyName);
		$sqlQuery->set($shoppingcartOrder->companyContactName);
		$sqlQuery->set($shoppingcartOrder->companyContactEmail);
		$sqlQuery->set($shoppingcartOrder->recipientName);
		$sqlQuery->set($shoppingcartOrder->recipientEmail);
		$sqlQuery->set($shoppingcartOrder->customerReferenceNumber);
		$sqlQuery->set($shoppingcartOrder->orderType);

		$sqlQuery->setNumber($shoppingcartOrder->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_order';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPurchaseTime($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE purchase_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToFirst($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_first = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToLast($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_last = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToStreet1($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_street1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToStreet2($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_street2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToCity($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToState($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToPostalcode($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_postalcode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToCountry($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToCcnum($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_ccnum = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBillToCardtype($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE bill_to_cardtype = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProcessorReplyDump($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE processor_reply_dump = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRefundedTime($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE refunded_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyName($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyContactName($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE company_contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyContactEmail($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE company_contact_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecipientName($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE recipient_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecipientEmail($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE recipient_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCustomerReferenceNumber($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE customer_reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderType($value){
		$sql = 'SELECT * FROM shoppingcart_order WHERE order_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPurchaseTime($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE purchase_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToFirst($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_first = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToLast($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_last = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToStreet1($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_street1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToStreet2($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_street2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToCity($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToState($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToPostalcode($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_postalcode = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToCountry($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToCcnum($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_ccnum = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBillToCardtype($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE bill_to_cardtype = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProcessorReplyDump($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE processor_reply_dump = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRefundedTime($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE refunded_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyName($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyContactName($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE company_contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyContactEmail($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE company_contact_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecipientName($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE recipient_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecipientEmail($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE recipient_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCustomerReferenceNumber($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE customer_reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderType($value){
		$sql = 'DELETE FROM shoppingcart_order WHERE order_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartOrderMySql 
	 */
	protected function readRow($row){
		$shoppingcartOrder = new ShoppingcartOrder();
		
		$shoppingcartOrder->id = $row['id'];
		$shoppingcartOrder->userId = $row['user_id'];
		$shoppingcartOrder->currency = $row['currency'];
		$shoppingcartOrder->status = $row['status'];
		$shoppingcartOrder->purchaseTime = $row['purchase_time'];
		$shoppingcartOrder->billToFirst = $row['bill_to_first'];
		$shoppingcartOrder->billToLast = $row['bill_to_last'];
		$shoppingcartOrder->billToStreet1 = $row['bill_to_street1'];
		$shoppingcartOrder->billToStreet2 = $row['bill_to_street2'];
		$shoppingcartOrder->billToCity = $row['bill_to_city'];
		$shoppingcartOrder->billToState = $row['bill_to_state'];
		$shoppingcartOrder->billToPostalcode = $row['bill_to_postalcode'];
		$shoppingcartOrder->billToCountry = $row['bill_to_country'];
		$shoppingcartOrder->billToCcnum = $row['bill_to_ccnum'];
		$shoppingcartOrder->billToCardtype = $row['bill_to_cardtype'];
		$shoppingcartOrder->processorReplyDump = $row['processor_reply_dump'];
		$shoppingcartOrder->refundedTime = $row['refunded_time'];
		$shoppingcartOrder->companyName = $row['company_name'];
		$shoppingcartOrder->companyContactName = $row['company_contact_name'];
		$shoppingcartOrder->companyContactEmail = $row['company_contact_email'];
		$shoppingcartOrder->recipientName = $row['recipient_name'];
		$shoppingcartOrder->recipientEmail = $row['recipient_email'];
		$shoppingcartOrder->customerReferenceNumber = $row['customer_reference_number'];
		$shoppingcartOrder->orderType = $row['order_type'];

		return $shoppingcartOrder;
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
	 * @return ShoppingcartOrderMySql 
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