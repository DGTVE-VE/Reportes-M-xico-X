<?php
/**
 * Class that operate on table 'shoppingcart_invoice'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartInvoiceMySqlDAO implements ShoppingcartInvoiceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartInvoiceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_invoice ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartInvoice primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoiceMySql shoppingcartInvoice
 	 */
	public function insert($shoppingcartInvoice){
		$sql = 'INSERT INTO shoppingcart_invoice (total_amount, company_name, course_id, internal_reference, is_valid, address_line_1, address_line_2, address_line_3, city, state, zip, country, recipient_name, recipient_email, customer_reference_number, company_contact_name, company_contact_email, created, modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoice->totalAmount);
		$sqlQuery->set($shoppingcartInvoice->companyName);
		$sqlQuery->set($shoppingcartInvoice->courseId);
		$sqlQuery->set($shoppingcartInvoice->internalReference);
		$sqlQuery->setNumber($shoppingcartInvoice->isValid);
		$sqlQuery->set($shoppingcartInvoice->addressLine1);
		$sqlQuery->set($shoppingcartInvoice->addressLine2);
		$sqlQuery->set($shoppingcartInvoice->addressLine3);
		$sqlQuery->set($shoppingcartInvoice->city);
		$sqlQuery->set($shoppingcartInvoice->state);
		$sqlQuery->set($shoppingcartInvoice->zip);
		$sqlQuery->set($shoppingcartInvoice->country);
		$sqlQuery->set($shoppingcartInvoice->recipientName);
		$sqlQuery->set($shoppingcartInvoice->recipientEmail);
		$sqlQuery->set($shoppingcartInvoice->customerReferenceNumber);
		$sqlQuery->set($shoppingcartInvoice->companyContactName);
		$sqlQuery->set($shoppingcartInvoice->companyContactEmail);
		$sqlQuery->set($shoppingcartInvoice->created);
		$sqlQuery->set($shoppingcartInvoice->modified);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartInvoice->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoiceMySql shoppingcartInvoice
 	 */
	public function update($shoppingcartInvoice){
		$sql = 'UPDATE shoppingcart_invoice SET total_amount = ?, company_name = ?, course_id = ?, internal_reference = ?, is_valid = ?, address_line_1 = ?, address_line_2 = ?, address_line_3 = ?, city = ?, state = ?, zip = ?, country = ?, recipient_name = ?, recipient_email = ?, customer_reference_number = ?, company_contact_name = ?, company_contact_email = ?, created = ?, modified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoice->totalAmount);
		$sqlQuery->set($shoppingcartInvoice->companyName);
		$sqlQuery->set($shoppingcartInvoice->courseId);
		$sqlQuery->set($shoppingcartInvoice->internalReference);
		$sqlQuery->setNumber($shoppingcartInvoice->isValid);
		$sqlQuery->set($shoppingcartInvoice->addressLine1);
		$sqlQuery->set($shoppingcartInvoice->addressLine2);
		$sqlQuery->set($shoppingcartInvoice->addressLine3);
		$sqlQuery->set($shoppingcartInvoice->city);
		$sqlQuery->set($shoppingcartInvoice->state);
		$sqlQuery->set($shoppingcartInvoice->zip);
		$sqlQuery->set($shoppingcartInvoice->country);
		$sqlQuery->set($shoppingcartInvoice->recipientName);
		$sqlQuery->set($shoppingcartInvoice->recipientEmail);
		$sqlQuery->set($shoppingcartInvoice->customerReferenceNumber);
		$sqlQuery->set($shoppingcartInvoice->companyContactName);
		$sqlQuery->set($shoppingcartInvoice->companyContactEmail);
		$sqlQuery->set($shoppingcartInvoice->created);
		$sqlQuery->set($shoppingcartInvoice->modified);

		$sqlQuery->setNumber($shoppingcartInvoice->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_invoice';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTotalAmount($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyName($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInternalReference($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE internal_reference = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsValid($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE is_valid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddressLine1($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE address_line_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddressLine2($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE address_line_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddressLine3($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE address_line_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCity($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByZip($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE zip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCountry($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecipientName($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE recipient_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecipientEmail($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE recipient_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCustomerReferenceNumber($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE customer_reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyContactName($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE company_contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyContactEmail($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE company_contact_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM shoppingcart_invoice WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTotalAmount($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE total_amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyName($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInternalReference($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE internal_reference = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsValid($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE is_valid = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddressLine1($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE address_line_1 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddressLine2($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE address_line_2 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddressLine3($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE address_line_3 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCity($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE city = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByZip($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE zip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCountry($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE country = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecipientName($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE recipient_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecipientEmail($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE recipient_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCustomerReferenceNumber($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE customer_reference_number = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyContactName($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE company_contact_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyContactEmail($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE company_contact_email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM shoppingcart_invoice WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartInvoiceMySql 
	 */
	protected function readRow($row){
		$shoppingcartInvoice = new ShoppingcartInvoice();
		
		$shoppingcartInvoice->id = $row['id'];
		$shoppingcartInvoice->totalAmount = $row['total_amount'];
		$shoppingcartInvoice->companyName = $row['company_name'];
		$shoppingcartInvoice->courseId = $row['course_id'];
		$shoppingcartInvoice->internalReference = $row['internal_reference'];
		$shoppingcartInvoice->isValid = $row['is_valid'];
		$shoppingcartInvoice->addressLine1 = $row['address_line_1'];
		$shoppingcartInvoice->addressLine2 = $row['address_line_2'];
		$shoppingcartInvoice->addressLine3 = $row['address_line_3'];
		$shoppingcartInvoice->city = $row['city'];
		$shoppingcartInvoice->state = $row['state'];
		$shoppingcartInvoice->zip = $row['zip'];
		$shoppingcartInvoice->country = $row['country'];
		$shoppingcartInvoice->recipientName = $row['recipient_name'];
		$shoppingcartInvoice->recipientEmail = $row['recipient_email'];
		$shoppingcartInvoice->customerReferenceNumber = $row['customer_reference_number'];
		$shoppingcartInvoice->companyContactName = $row['company_contact_name'];
		$shoppingcartInvoice->companyContactEmail = $row['company_contact_email'];
		$shoppingcartInvoice->created = $row['created'];
		$shoppingcartInvoice->modified = $row['modified'];

		return $shoppingcartInvoice;
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
	 * @return ShoppingcartInvoiceMySql 
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