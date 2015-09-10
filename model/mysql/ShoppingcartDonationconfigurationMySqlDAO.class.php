<?php
/**
 * Class that operate on table 'shoppingcart_donationconfiguration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartDonationconfigurationMySqlDAO implements ShoppingcartDonationconfigurationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartDonationconfigurationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartDonationconfiguration primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_donationconfiguration WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartDonationconfigurationMySql shoppingcartDonationconfiguration
 	 */
	public function insert($shoppingcartDonationconfiguration){
		$sql = 'INSERT INTO shoppingcart_donationconfiguration (change_date, changed_by_id, enabled) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartDonationconfiguration->changeDate);
		$sqlQuery->setNumber($shoppingcartDonationconfiguration->changedById);
		$sqlQuery->setNumber($shoppingcartDonationconfiguration->enabled);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartDonationconfiguration->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartDonationconfigurationMySql shoppingcartDonationconfiguration
 	 */
	public function update($shoppingcartDonationconfiguration){
		$sql = 'UPDATE shoppingcart_donationconfiguration SET change_date = ?, changed_by_id = ?, enabled = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartDonationconfiguration->changeDate);
		$sqlQuery->setNumber($shoppingcartDonationconfiguration->changedById);
		$sqlQuery->setNumber($shoppingcartDonationconfiguration->enabled);

		$sqlQuery->setNumber($shoppingcartDonationconfiguration->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_donationconfiguration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChangeDate($value){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByChangedById($value){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnabled($value){
		$sql = 'SELECT * FROM shoppingcart_donationconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChangeDate($value){
		$sql = 'DELETE FROM shoppingcart_donationconfiguration WHERE change_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByChangedById($value){
		$sql = 'DELETE FROM shoppingcart_donationconfiguration WHERE changed_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnabled($value){
		$sql = 'DELETE FROM shoppingcart_donationconfiguration WHERE enabled = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartDonationconfigurationMySql 
	 */
	protected function readRow($row){
		$shoppingcartDonationconfiguration = new ShoppingcartDonationconfiguration();
		
		$shoppingcartDonationconfiguration->id = $row['id'];
		$shoppingcartDonationconfiguration->changeDate = $row['change_date'];
		$shoppingcartDonationconfiguration->changedById = $row['changed_by_id'];
		$shoppingcartDonationconfiguration->enabled = $row['enabled'];

		return $shoppingcartDonationconfiguration;
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
	 * @return ShoppingcartDonationconfigurationMySql 
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