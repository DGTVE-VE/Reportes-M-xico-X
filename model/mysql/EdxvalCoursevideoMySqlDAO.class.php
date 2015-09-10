<?php
/**
 * Class that operate on table 'edxval_coursevideo'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EdxvalCoursevideoMySqlDAO implements EdxvalCoursevideoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EdxvalCoursevideoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM edxval_coursevideo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM edxval_coursevideo';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM edxval_coursevideo ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param edxvalCoursevideo primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM edxval_coursevideo WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EdxvalCoursevideoMySql edxvalCoursevideo
 	 */
	public function insert($edxvalCoursevideo){
		$sql = 'INSERT INTO edxval_coursevideo (course_id, video_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalCoursevideo->courseId);
		$sqlQuery->setNumber($edxvalCoursevideo->videoId);

		$id = $this->executeInsert($sqlQuery);	
		$edxvalCoursevideo->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EdxvalCoursevideoMySql edxvalCoursevideo
 	 */
	public function update($edxvalCoursevideo){
		$sql = 'UPDATE edxval_coursevideo SET course_id = ?, video_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($edxvalCoursevideo->courseId);
		$sqlQuery->setNumber($edxvalCoursevideo->videoId);

		$sqlQuery->setNumber($edxvalCoursevideo->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM edxval_coursevideo';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCourseId($value){
		$sql = 'SELECT * FROM edxval_coursevideo WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVideoId($value){
		$sql = 'SELECT * FROM edxval_coursevideo WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCourseId($value){
		$sql = 'DELETE FROM edxval_coursevideo WHERE course_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVideoId($value){
		$sql = 'DELETE FROM edxval_coursevideo WHERE video_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EdxvalCoursevideoMySql 
	 */
	protected function readRow($row){
		$edxvalCoursevideo = new EdxvalCoursevideo();
		
		$edxvalCoursevideo->id = $row['id'];
		$edxvalCoursevideo->courseId = $row['course_id'];
		$edxvalCoursevideo->videoId = $row['video_id'];

		return $edxvalCoursevideo;
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
	 * @return EdxvalCoursevideoMySql 
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