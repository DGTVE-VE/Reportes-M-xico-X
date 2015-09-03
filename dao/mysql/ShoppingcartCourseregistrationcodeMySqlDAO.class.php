<?php
/**
 * Class that operate on table 'shoppingcart_courseregistrationcode'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartCourseregistrationcodeMySqlDAO implements ShoppingcartCourseregistrationcodeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartCourseregistrationcodeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartCourseregistrationcode primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeMySql shoppingcartCourseregistrationcode
 	 */
	public function insert($shoppingcartCourseregistrationcode){
		$sql = 'INSERT INTO shoppingcart_courseregistrationcode (code, course_id, created_by_id, created_at, invoice_id, order_id, mode_slug, invoice_item_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregistrationcode->code);
		$sqlQuery->set($shoppingcartCourseregistrationcode->courseId);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->createdById);
		$sqlQuery->set($shoppingcartCourseregistrationcode->createdAt);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->invoiceId);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->orderId);
		$sqlQuery->set($shoppingcartCourseregistrationcode->modeSlug);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->invoiceItemId);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartCourseregistrationcode->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartCourseregistrationcodeMySql shoppingcartCourseregistrationcode
 	 */
	public function update($shoppingcartCourseregistrationcode){
		$sql = 'UPDATE shoppingcart_courseregistrationcode SET code = ?, course_id = ?, created_by_id = ?, created_at = ?, invoice_id = ?, order_id = ?, mode_slug = ?, invoice_item_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartCourseregistrationcode->code);
		$sqlQuery->set($shoppingcartCourseregistrationcode->courseId);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->createdById);
		$sqlQuery->set($shoppingcartCourseregistrationcode->createdAt);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->invoiceId);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->orderId);
		$sqlQuery->set($shoppingcartCourseregistrationcode->modeSlug);
		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->invoiceItemId);

		$sqlQuery->setNumber($shoppingcartCourseregistrationcode->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCode($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedById($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOrderId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModeSlug($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvoiceItemId($value){
		$sql = 'SELECT * FROM shoppingcart_courseregistrationcode WHERE invoice_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCode($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedById($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE created_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceId($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE invoice_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOrderId($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE order_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModeSlug($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE mode_slug = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvoiceItemId($value){
		$sql = 'DELETE FROM shoppingcart_courseregistrationcode WHERE invoice_item_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartCourseregistrationcodeMySql 
	 */
	protected function readRow($row){
		$shoppingcartCourseregistrationcode = new ShoppingcartCourseregistrationcode();
		
		$shoppingcartCourseregistrationcode->id = $row['id'];
		$shoppingcartCourseregistrationcode->code = $row['code'];
		$shoppingcartCourseregistrationcode->courseId = $row['course_id'];
		$shoppingcartCourseregistrationcode->createdById = $row['created_by_id'];
		$shoppingcartCourseregistrationcode->createdAt = $row['created_at'];
		$shoppingcartCourseregistrationcode->invoiceId = $row['invoice_id'];
		$shoppingcartCourseregistrationcode->orderId = $row['order_id'];
		$shoppingcartCourseregistrationcode->modeSlug = $row['mode_slug'];
		$shoppingcartCourseregistrationcode->invoiceItemId = $row['invoice_item_id'];

		return $shoppingcartCourseregistrationcode;
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
	 * @return ShoppingcartCourseregistrationcodeMySql 
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