<?php
/**
 * Class that operate on table 'shoppingcart_invoicehistory'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartInvoicehistoryMySqlDAO implements ShoppingcartInvoicehistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartInvoicehistoryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartInvoicehistory primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_invoicehistory WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoicehistoryMySql shoppingcartInvoicehistory
 	 */
	public function insert($shoppingcartInvoicehistory){
		$sql = 'INSERT INTO shoppingcart_invoicehistory (timestamp, invoice_id, snapshot) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoicehistory->timestamp);
		$sqlQuery->setNumber($shoppingcartInvoicehistory->invoiceId);
		$sqlQuery->set($shoppingcartInvoicehistory->snapshot);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartInvoicehistory->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoicehistoryMySql shoppingcartInvoicehistory
 	 */
	public function update($shoppingcartInvoicehistory){
		$sql = 'UPDATE shoppingcart_invoicehistory SET timestamp = ?, invoice_id = ?, snapshot = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoicehistory->timestamp);
		$sqlQuery->setNumber($shoppingcartInvoicehistory->invoiceId);
		$sqlQuery->set($shoppingcartInvoicehistory->snapshot);

		$sqlQuery->setNumber($shoppingcartInvoicehistory->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_invoicehistory';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTimestamp($value){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceId($value){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySnapshot($value){
		$sql = 'SELECT * FROM shoppingcart_invoicehistory WHERE snapshot = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTimestamp($value){
		$sql = 'DELETE FROM shoppingcart_invoicehistory WHERE timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceId($value){
		$sql = 'DELETE FROM shoppingcart_invoicehistory WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySnapshot($value){
		$sql = 'DELETE FROM shoppingcart_invoicehistory WHERE snapshot = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartInvoicehistoryMySql 
	 */
	protected function readRow($row){
		$shoppingcartInvoicehistory = new ShoppingcartInvoicehistory();
		
		$shoppingcartInvoicehistory->id = $row['id'];
		$shoppingcartInvoicehistory->timestamp = $row['timestamp'];
		$shoppingcartInvoicehistory->invoiceId = $row['invoice_id'];
		$shoppingcartInvoicehistory->snapshot = $row['snapshot'];

		return $shoppingcartInvoicehistory;
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
	 * @return ShoppingcartInvoicehistoryMySql 
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