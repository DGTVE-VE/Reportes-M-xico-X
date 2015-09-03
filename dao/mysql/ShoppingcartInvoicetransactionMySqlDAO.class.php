<?php
/**
 * Class that operate on table 'shoppingcart_invoicetransaction'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartInvoicetransactionMySqlDAO implements ShoppingcartInvoicetransactionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartInvoicetransactionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartInvoicetransaction primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoicetransactionMySql shoppingcartInvoicetransaction
 	 */
	public function insert($shoppingcartInvoicetransaction){
		$sql = 'INSERT INTO shoppingcart_invoicetransaction (created, modified, invoice_id, amount, currency, comments, status, created_by_id, last_modified_by_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoicetransaction->created);
		$sqlQuery->set($shoppingcartInvoicetransaction->modified);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->invoiceId);
		$sqlQuery->set($shoppingcartInvoicetransaction->amount);
		$sqlQuery->set($shoppingcartInvoicetransaction->currency);
		$sqlQuery->set($shoppingcartInvoicetransaction->comments);
		$sqlQuery->set($shoppingcartInvoicetransaction->status);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->createdById);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->lastModifiedById);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartInvoicetransaction->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoicetransactionMySql shoppingcartInvoicetransaction
 	 */
	public function update($shoppingcartInvoicetransaction){
		$sql = 'UPDATE shoppingcart_invoicetransaction SET created = ?, modified = ?, invoice_id = ?, amount = ?, currency = ?, comments = ?, status = ?, created_by_id = ?, last_modified_by_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoicetransaction->created);
		$sqlQuery->set($shoppingcartInvoicetransaction->modified);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->invoiceId);
		$sqlQuery->set($shoppingcartInvoicetransaction->amount);
		$sqlQuery->set($shoppingcartInvoicetransaction->currency);
		$sqlQuery->set($shoppingcartInvoicetransaction->comments);
		$sqlQuery->set($shoppingcartInvoicetransaction->status);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->createdById);
		$sqlQuery->setNumber($shoppingcartInvoicetransaction->lastModifiedById);

		$sqlQuery->setNumber($shoppingcartInvoicetransaction->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceId($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAmount($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComments($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE comments = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedById($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastModifiedById($value){
		$sql = 'SELECT * FROM shoppingcart_invoicetransaction WHERE last_modified_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceId($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAmount($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE amount = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComments($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE comments = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedById($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastModifiedById($value){
		$sql = 'DELETE FROM shoppingcart_invoicetransaction WHERE last_modified_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartInvoicetransactionMySql 
	 */
	protected function readRow($row){
		$shoppingcartInvoicetransaction = new ShoppingcartInvoicetransaction();
		
		$shoppingcartInvoicetransaction->id = $row['id'];
		$shoppingcartInvoicetransaction->created = $row['created'];
		$shoppingcartInvoicetransaction->modified = $row['modified'];
		$shoppingcartInvoicetransaction->invoiceId = $row['invoice_id'];
		$shoppingcartInvoicetransaction->amount = $row['amount'];
		$shoppingcartInvoicetransaction->currency = $row['currency'];
		$shoppingcartInvoicetransaction->comments = $row['comments'];
		$shoppingcartInvoicetransaction->status = $row['status'];
		$shoppingcartInvoicetransaction->createdById = $row['created_by_id'];
		$shoppingcartInvoicetransaction->lastModifiedById = $row['last_modified_by_id'];

		return $shoppingcartInvoicetransaction;
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
	 * @return ShoppingcartInvoicetransactionMySql 
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