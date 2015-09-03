<?php
/**
 * Class that operate on table 'wiki_articlesubscription'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class WikiArticlesubscriptionMySqlDAO implements WikiArticlesubscriptionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WikiArticlesubscriptionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM wiki_articlesubscription WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM wiki_articlesubscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM wiki_articlesubscription ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param wikiArticlesubscription primary key
 	 */
	public function delete($articleplugin_ptr_id){
		$sql = 'DELETE FROM wiki_articlesubscription WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($articleplugin_ptr_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WikiArticlesubscriptionMySql wikiArticlesubscription
 	 */
	public function insert($wikiArticlesubscription){
		$sql = 'INSERT INTO wiki_articlesubscription (subscription_ptr_id) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticlesubscription->subscriptionPtrId);

		$id = $this->executeInsert($sqlQuery);	
		$wikiArticlesubscription->articlepluginPtrId = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WikiArticlesubscriptionMySql wikiArticlesubscription
 	 */
	public function update($wikiArticlesubscription){
		$sql = 'UPDATE wiki_articlesubscription SET subscription_ptr_id = ? WHERE articleplugin_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($wikiArticlesubscription->subscriptionPtrId);

		$sqlQuery->setNumber($wikiArticlesubscription->articlepluginPtrId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM wiki_articlesubscription';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubscriptionPtrId($value){
		$sql = 'SELECT * FROM wiki_articlesubscription WHERE subscription_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubscriptionPtrId($value){
		$sql = 'DELETE FROM wiki_articlesubscription WHERE subscription_ptr_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WikiArticlesubscriptionMySql 
	 */
	protected function readRow($row){
		$wikiArticlesubscription = new WikiArticlesubscription();
		
		$wikiArticlesubscription->subscriptionPtrId = $row['subscription_ptr_id'];
		$wikiArticlesubscription->articlepluginPtrId = $row['articleplugin_ptr_id'];

		return $wikiArticlesubscription;
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
	 * @return WikiArticlesubscriptionMySql 
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