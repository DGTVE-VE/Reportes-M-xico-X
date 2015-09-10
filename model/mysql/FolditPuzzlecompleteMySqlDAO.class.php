<?php
/**
 * Class that operate on table 'foldit_puzzlecomplete'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class FolditPuzzlecompleteMySqlDAO implements FolditPuzzlecompleteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FolditPuzzlecompleteMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM foldit_puzzlecomplete';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM foldit_puzzlecomplete ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param folditPuzzlecomplete primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FolditPuzzlecompleteMySql folditPuzzlecomplete
 	 */
	public function insert($folditPuzzlecomplete){
		$sql = 'INSERT INTO foldit_puzzlecomplete (user_id, unique_user_id, puzzle_id, puzzle_set, puzzle_subset, created) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($folditPuzzlecomplete->userId);
		$sqlQuery->set($folditPuzzlecomplete->uniqueUserId);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleId);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleSet);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleSubset);
		$sqlQuery->set($folditPuzzlecomplete->created);

		$id = $this->executeInsert($sqlQuery);	
		$folditPuzzlecomplete->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FolditPuzzlecompleteMySql folditPuzzlecomplete
 	 */
	public function update($folditPuzzlecomplete){
		$sql = 'UPDATE foldit_puzzlecomplete SET user_id = ?, unique_user_id = ?, puzzle_id = ?, puzzle_set = ?, puzzle_subset = ?, created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($folditPuzzlecomplete->userId);
		$sqlQuery->set($folditPuzzlecomplete->uniqueUserId);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleId);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleSet);
		$sqlQuery->setNumber($folditPuzzlecomplete->puzzleSubset);
		$sqlQuery->set($folditPuzzlecomplete->created);

		$sqlQuery->setNumber($folditPuzzlecomplete->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM foldit_puzzlecomplete';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUniqueUserId($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE unique_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPuzzleId($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE puzzle_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPuzzleSet($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE puzzle_set = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPuzzleSubset($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE puzzle_subset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM foldit_puzzlecomplete WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUniqueUserId($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE unique_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPuzzleId($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE puzzle_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPuzzleSet($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE puzzle_set = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPuzzleSubset($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE puzzle_subset = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM foldit_puzzlecomplete WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FolditPuzzlecompleteMySql 
	 */
	protected function readRow($row){
		$folditPuzzlecomplete = new FolditPuzzlecomplete();
		
		$folditPuzzlecomplete->id = $row['id'];
		$folditPuzzlecomplete->userId = $row['user_id'];
		$folditPuzzlecomplete->uniqueUserId = $row['unique_user_id'];
		$folditPuzzlecomplete->puzzleId = $row['puzzle_id'];
		$folditPuzzlecomplete->puzzleSet = $row['puzzle_set'];
		$folditPuzzlecomplete->puzzleSubset = $row['puzzle_subset'];
		$folditPuzzlecomplete->created = $row['created'];

		return $folditPuzzlecomplete;
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
	 * @return FolditPuzzlecompleteMySql 
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