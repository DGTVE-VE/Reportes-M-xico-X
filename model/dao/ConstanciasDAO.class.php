<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface ConstanciasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Constancias 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param Constancias primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Constancias constancias
 	 */
	public function insert($Constancias);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Constancias constancias
 	 */
	public function update($Constancias);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryById($value);

	public function queryByNombre($value);

	public function queryByCorreo($value);

	public function queryByInstitucion($value);

	public function queryByCurso($value);

	public function queryByPeriodo($value);

	public function queryByFolio($value);
        
        public function queryByEnviado($value);
        

	public function deleteById($value);

	public function deleteByNombre($value);

	public function deleteByCorreo($value);

        public function deleteByInstitucion($value);

	public function deleteByCurso($value);

	public function deleteByPeriodo($value);
        	
        public function deleteByFolio($value);
        
        public function deleteByEnviado($value);
}
?>