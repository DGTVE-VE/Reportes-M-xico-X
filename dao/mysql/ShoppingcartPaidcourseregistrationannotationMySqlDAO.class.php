<?php
/**
 * Class that operate on table 'shoppingcart_paidcourseregistrationannotation'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ShoppingcartPaidcourseregistrationannotationMySqlDAO implements ShoppingcartPaidcourseregistrationannotationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ShoppingcartPaidcourseregistrationannotationMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistrationannotation WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistrationannotation';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistrationannotation ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param shoppingcartPaidcourseregistrationannotation primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistrationannotation WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationannotationMySql shoppingcartPaidcourseregistrationannotation
 	 */
	public function insert($shoppingcartPaidcourseregistrationannotation){
		$sql = 'INSERT INTO shoppingcart_paidcourseregistrationannotation (course_id, annotation) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartPaidcourseregistrationannotation->courseId);
		$sqlQuery->set($shoppingcartPaidcourseregistrationannotation->annotation);

		$id = $this->executeInsert($sqlQuery);	
		$shoppingcartPaidcourseregistrationannotation->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ShoppingcartPaidcourseregistrationannotationMySql shoppingcartPaidcourseregistrationannotation
 	 */
	public function update($shoppingcartPaidcourseregistrationannotation){
		$sql = 'UPDATE shoppingcart_paidcourseregistrationannotation SET course_id = ?, annotation = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($shoppingcartPaidcourseregistrationannotation->courseId);
		$sqlQuery->set($shoppingcartPaidcourseregistrationannotation->annotation);

		$sqlQuery->setNumber($shoppingcartPaidcourseregistrationannotation->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistrationannotation';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistrationannotation WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnnotation($value){
		$sql = 'SELECT * FROM shoppingcart_paidcourseregistrationannotation WHERE annotation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistrationannotation WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnnotation($value){
		$sql = 'DELETE FROM shoppingcart_paidcourseregistrationannotation WHERE annotation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ShoppingcartPaidcourseregistrationannotationMySql 
	 */
	protected function readRow($row){
		$shoppingcartPaidcourseregistrationannotation = new ShoppingcartPaidcourseregistrationannotation();
		
		$shoppingcartPaidcourseregistrationannotation->id = $row['id'];
		$shoppingcartPaidcourseregistrationannotation->courseId = $row['course_id'];
		$shoppingcartPaidcourseregistrationannotation->annotation = $row['annotation'];

		return $shoppingcartPaidcourseregistrationannotation;
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
	 * @return ShoppingcartPaidcourseregistrationannotationMySql 
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