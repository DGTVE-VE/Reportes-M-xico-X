<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
interface EncuestaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Encuesta 
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
 	 * @param encuesta primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Encuesta encuesta
 	 */
	public function insert($encuesta);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Encuesta encuesta
 	 */
	public function update($encuesta);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdencuesta($value);

	public function queryByPregunta1($value);
	public function queryByPregunta2($value);
	public function queryByPregunta3($value);
	public function queryByPregunta4($value);
	public function queryByPregunta5($value);
	public function queryByPregunta6r1($value);
	public function queryByPregunta6r2($value);
	public function queryByPregunta6r3($value);
	public function queryByPregunta6r4($value);
	public function queryByPregunta7($value);
	public function queryByPregunta8($value);
	public function queryByPregunta9($value);
	public function queryByPregunta10($value);
	public function queryByConstancia($value);        



	public function deleteByIdencuesta($value);

	public function deleteByPregunta1($value);
	public function deleteByPregunta2($value);
	public function deleteByPregunta3($value);
	public function deleteByPregunta4($value);
	public function deleteByPregunta5($value);
	public function deleteByPregunta6r1($value);
	public function deleteByPregunta6r2($value);
	public function deleteByPregunta6r3($value);
	public function deleteByPregunta6r4($value);
	public function deleteByPregunta7($value);
	public function deleteByPregunta8($value);        
	public function deleteByPregunta9($value);
	public function deleteByPregunta10($value);
	public function deleteByConstancia($value);        
}
?>