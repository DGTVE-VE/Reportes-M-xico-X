<?php
/**
 * Class that operate on table 'shoppingcart_invoiceitem'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartInvoiceitemMySqlDAO implements ShoppingcartInvoiceitemDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartInvoiceitemMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartInvoiceitem primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartInvoiceitemMySql shoppingcartInvoiceitem
 	 */
	public function insert($shoppingcartInvoiceitem){
		$sql = 'INSERT INTO shoppingcart_invoiceitem (created, modified, invoice_id, qty, unit_price, currency) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoiceitem->created);
		$sqlQuery->set($shoppingcartInvoiceitem->modified);
		$sqlQuery->setNumber($shoppingcartInvoiceitem->invoiceId);
		$sqlQuery->setNumber($shoppingcartInvoiceitem->qty);
		$sqlQuery->set($shoppingcartInvoiceitem->unitPrice);
		$sqlQuery->set($shoppingcartInvoiceitem->currency);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartInvoiceitem->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartInvoiceitemMySql shoppingcartInvoiceitem
 	 */
	public function update($shoppingcartInvoiceitem){
		$sql = 'UPDATE shoppingcart_invoiceitem SET created = ?, modified = ?, invoice_id = ?, qty = ?, unit_price = ?, currency = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartInvoiceitem->created);
		$sqlQuery->set($shoppingcartInvoiceitem->modified);
		$sqlQuery->setNumber($shoppingcartInvoiceitem->invoiceId);
		$sqlQuery->setNumber($shoppingcartInvoiceitem->qty);
		$sqlQuery->set($shoppingcartInvoiceitem->unitPrice);
		$sqlQuery->set($shoppingcartInvoiceitem->currency);

		$sqlQuery->setNumber($shoppingcartInvoiceitem->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_invoiceitem';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModified($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceId($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQty($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE qty = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUnitPrice($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE unit_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrency($value){
		$sql = 'SELECT * FROM shoppingcart_invoiceitem WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCreated($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModified($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE modified = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceId($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQty($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE qty = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUnitPrice($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE unit_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrency($value){
		$sql = 'DELETE FROM shoppingcart_invoiceitem WHERE currency = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartInvoiceitemMySql 
	 */
	protected function readRow($row){
		$shoppingcartInvoiceitem = new ShoppingcartInvoiceitem();
		
		$shoppingcartInvoiceitem->id = $row['id'];
		$shoppingcartInvoiceitem->created = $row['created'];
		$shoppingcartInvoiceitem->modified = $row['modified'];
		$shoppingcartInvoiceitem->invoiceId = $row['invoice_id'];
		$shoppingcartInvoiceitem->qty = $row['qty'];
		$shoppingcartInvoiceitem->unitPrice = $row['unit_price'];
		$shoppingcartInvoiceitem->currency = $row['currency'];

		return $shoppingcartInvoiceitem;
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
	 * @return ShoppingcartInvoiceitemMySql 
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