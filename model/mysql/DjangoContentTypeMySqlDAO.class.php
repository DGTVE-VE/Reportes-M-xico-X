<?php
/**
 * Class that operate on table 'django_content_type'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class DjangoContentTypeMySqlDAO implements DjangoContentTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DjangoContentTypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM django_content_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM django_content_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM django_content_type ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param djangoContentType primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM django_content_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DjangoContentTypeMySql djangoContentType
 	 */
	public function insert($djangoContentType){
		$sql = 'INSERT INTO django_content_type (name, app_label, model) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoContentType->name);
		$sqlQuery->set($djangoContentType->appLabel);
		$sqlQuery->set($djangoContentType->model);

		$id = $this->executeInsert($sqlQuery);	
		$djangoContentType->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DjangoContentTypeMySql djangoContentType
 	 */
	public function update($djangoContentType){
		$sql = 'UPDATE django_content_type SET name = ?, app_label = ?, model = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($djangoContentType->name);
		$sqlQuery->set($djangoContentType->appLabel);
		$sqlQuery->set($djangoContentType->model);

		$sqlQuery->setNumber($djangoContentType->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM django_content_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM django_content_type WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAppLabel($value){
		$sql = 'SELECT * FROM django_content_type WHERE app_label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByModel($value){
		$sql = 'SELECT * FROM django_content_type WHERE model = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM django_content_type WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAppLabel($value){
		$sql = 'DELETE FROM django_content_type WHERE app_label = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByModel($value){
		$sql = 'DELETE FROM django_content_type WHERE model = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DjangoContentTypeMySql 
	 */
	protected function readRow($row){
		$djangoContentType = new DjangoContentType();
		
		$djangoContentType->id = $row['id'];
		$djangoContentType->name = $row['name'];
		$djangoContentType->appLabel = $row['app_label'];
		$djangoContentType->model = $row['model'];

		return $djangoContentType;
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
	 * @return DjangoContentTypeMySql 
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