<?php
/**
 * Class that operate on table 'constancias'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class ConstanciasMySqlDAO implements ConstanciasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ConstanciasMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM constancias WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM constancias';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM constancias ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param constancias primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM constancias WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ConstanciasMySql constancias
 	 */
	public function insert($constancias){
		$sql = 'INSERT INTO constancias (id, nombre, correo, institucion, curso, periodo, folio) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($constancias->id);
		$sqlQuery->set($constancias->nombre);                                
		$sqlQuery->set($constancias->correo);
		$sqlQuery->set($constancias->institucion);
                $sqlQuery->set($constancias->curso);
                $sqlQuery->set($constancias->periodo);
                $sqlQuery->set($constancias->folio);

		$id = $this->executeInsert($sqlQuery);	
		$constancias->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ConstanciasMySql constancias
 	 */
	public function update($constancias){
		$sql = 'UPDATE constancias SET id = ?, nombre = ?, correo = ?, institucion = ?, curso = ?, periodo = ?, folio = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($constancias->id);
		$sqlQuery->set($constancias->nombre);
		$sqlQuery->set($constancias->correo);
                $sqlQuery->set($constancias->institucion);
                $sqlQuery->set($constancias->curso);
		$sqlQuery->set($constancias->periodo);
		$sqlQuery->set($constancias->folio);                                

		$sqlQuery->setNumber($constancias->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM constancias';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryById($value){
		$sql = 'SELECT * FROM constancias WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM constancias WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM constancias WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInstitucion($value){
		$sql = 'SELECT * FROM constancias WHERE institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}
        
	public function queryByCurso($value){
		$sql = 'SELECT * FROM constancias WHERE curso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}        

        public function queryByPeriodo($value){
		$sql = 'SELECT * FROM constancias WHERE periodo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFolio($value){
		$sql = 'SELECT * FROM constancias WHERE folio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}        

	public function deleteById($value){
		$sql = 'DELETE FROM constancias WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}        
        
	public function deleteByNombre($value){
		$sql = 'DELETE FROM constancias WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}
        
	public function deleteByCorreo($value){
		$sql = 'DELETE FROM constancias WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}
        
        public function deleteByInstitucion($value){
		$sql = 'DELETE FROM constancias WHERE institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurso($value){
		$sql = 'DELETE FROM constancias WHERE curso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPeriodo($value){
		$sql = 'DELETE FROM constancias WHERE periodo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}
	public function deleteByFolio($value){
		$sql = 'DELETE FROM constancias WHERE folio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	
	/**
	 * Read row
	 *
	 * @return ConstanciasMySql 
	 */
	protected function readRow($row){
		$Constancias = new Constancias();
		
		$Constancias->id = $row['id'];
		$Constancias->nombre = $row['nombre'];
		$Constancias->correo = $row['correo'];
		$Constancias->institucion = $row['institucion'];
		$Constancias->curso = $row['curso'];
		$Constancias->periodo = $row['periodo'];
		$Constancias->folio = $row['folio'];
                

		return $Constancias;
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
	 * @return ConstanciasMySql 
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