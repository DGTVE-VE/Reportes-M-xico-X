<?php
/**
 * Class that operate on table 'foldit_score'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class FolditScoreMySqlDAO implements FolditScoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FolditScoreMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM foldit_score WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM foldit_score';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM foldit_score ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param folditScore primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM foldit_score WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FolditScoreMySql folditScore
 	 */
	public function insert($folditScore){
		$sql = 'INSERT INTO foldit_score (user_id, unique_user_id, puzzle_id, best_score, current_score, score_version, created) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($folditScore->userId);
		$sqlQuery->set($folditScore->uniqueUserId);
		$sqlQuery->setNumber($folditScore->puzzleId);
		$sqlQuery->set($folditScore->bestScore);
		$sqlQuery->set($folditScore->currentScore);
		$sqlQuery->setNumber($folditScore->scoreVersion);
		$sqlQuery->set($folditScore->created);

		$id = $this->executeInsert($sqlQuery);	
		$folditScore->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FolditScoreMySql folditScore
 	 */
	public function update($folditScore){
		$sql = 'UPDATE foldit_score SET user_id = ?, unique_user_id = ?, puzzle_id = ?, best_score = ?, current_score = ?, score_version = ?, created = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($folditScore->userId);
		$sqlQuery->set($folditScore->uniqueUserId);
		$sqlQuery->setNumber($folditScore->puzzleId);
		$sqlQuery->set($folditScore->bestScore);
		$sqlQuery->set($folditScore->currentScore);
		$sqlQuery->setNumber($folditScore->scoreVersion);
		$sqlQuery->set($folditScore->created);

		$sqlQuery->setNumber($folditScore->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM foldit_score';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM foldit_score WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUniqueUserId($value){
		$sql = 'SELECT * FROM foldit_score WHERE unique_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPuzzleId($value){
		$sql = 'SELECT * FROM foldit_score WHERE puzzle_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBestScore($value){
		$sql = 'SELECT * FROM foldit_score WHERE best_score = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrentScore($value){
		$sql = 'SELECT * FROM foldit_score WHERE current_score = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByScoreVersion($value){
		$sql = 'SELECT * FROM foldit_score WHERE score_version = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreated($value){
		$sql = 'SELECT * FROM foldit_score WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM foldit_score WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUniqueUserId($value){
		$sql = 'DELETE FROM foldit_score WHERE unique_user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPuzzleId($value){
		$sql = 'DELETE FROM foldit_score WHERE puzzle_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBestScore($value){
		$sql = 'DELETE FROM foldit_score WHERE best_score = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrentScore($value){
		$sql = 'DELETE FROM foldit_score WHERE current_score = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByScoreVersion($value){
		$sql = 'DELETE FROM foldit_score WHERE score_version = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreated($value){
		$sql = 'DELETE FROM foldit_score WHERE created = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FolditScoreMySql 
	 */
	protected function readRow($row){
		$folditScore = new FolditScore();
		
		$folditScore->id = $row['id'];
		$folditScore->userId = $row['user_id'];
		$folditScore->uniqueUserId = $row['unique_user_id'];
		$folditScore->puzzleId = $row['puzzle_id'];
		$folditScore->bestScore = $row['best_score'];
		$folditScore->currentScore = $row['current_score'];
		$folditScore->scoreVersion = $row['score_version'];
		$folditScore->created = $row['created'];

		return $folditScore;
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
	 * @return FolditScoreMySql 
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