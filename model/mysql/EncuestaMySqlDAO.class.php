<?php

/**
 * Class that operate on table 'encuesta'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:45
 */
class EncuestaMySqlDAO implements EncuestaDAO {

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return EncuestaMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM encuesta WHERE idencuesta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $sql = 'SELECT * FROM encuesta';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM encuesta ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param encuesta primary key
     */
    public function delete($id) {
        $sql = 'DELETE FROM encuesta WHERE idencuesta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param EncuestaMySql encuesta
     */
    public function insert($encuesta) {
        $sql = 'INSERT INTO encuesta (idencuesta, pregunta1, pregunta2, pregunta3, pregunta4,pregunta5,pregunta6r1,pregunta6r2,pregunta6r3,pregunta6r4,pregunta7,pregunta8,pregunta9,pregunta10,constancia) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($encuesta->idencuesta);
        $sqlQuery->set($encuesta->pregunta1);
        $sqlQuery->set($encuesta->pregunta2);
        $sqlQuery->set($encuesta->pregunta3);
        $sqlQuery->set($encuesta->pregunta4);
        $sqlQuery->set($encuesta->pregunta5);
        $sqlQuery->set($encuesta->pregunta6r1);
        $sqlQuery->set($encuesta->pregunta6r2);
        $sqlQuery->set($encuesta->pregunta6r3);
        $sqlQuery->set($encuesta->pregunta6r4);
        $sqlQuery->set($encuesta->pregunta7);
        $sqlQuery->set($encuesta->pregunta8);
        $sqlQuery->set($encuesta->pregunta9);
        $sqlQuery->set($encuesta->pregunta10);
        $sqlQuery->set($encuesta->constancia);
        $id = $this->executeInsert($sqlQuery);
        $encuesta->idencuesta = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param EncuestaMySql encuesta
     */
    public function update($encuesta) {
        $sql = 'UPDATE encuesta SET pregunta1 = ?, pregunta2 = ?, pregunta3 = ?, pregunta4 = ?, pregunta5 = ?, pregunta6r1 = ?, pregunta6r2 = ?, pregunta6r3 = ?, pregunta6r4 = ?, pregunta7 = ?, pregunta8 = ?, pregunta9 = ?, pregunta10 = ?, constancia = ? WHERE idencuesta = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($encuesta->idencuesta);
        $sqlQuery->set($encuesta->pregunta1);
        $sqlQuery->set($encuesta->pregunta2);
        $sqlQuery->set($encuesta->pregunta3);
        $sqlQuery->set($encuesta->pregunta4);
        $sqlQuery->set($encuesta->pregunta5);
        $sqlQuery->set($encuesta->pregunta6r1);
        $sqlQuery->set($encuesta->pregunta6r2);
        $sqlQuery->set($encuesta->pregunta6r3);
        $sqlQuery->set($encuesta->pregunta6r4);
        $sqlQuery->set($encuesta->pregunta7);
        $sqlQuery->set($encuesta->pregunta8);
        $sqlQuery->set($encuesta->pregunta9);
        $sqlQuery->set($encuesta->pregunta10);
        $sqlQuery->set($encuesta->constancia);

        $sqlQuery->setNumber($encuesta->idencuesta);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM encuesta';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByIdencuesta($value) {
        $sql = 'DELETE FROM encuesta WHERE idencuesta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByIdencuesta($value) {
        $sql = 'SELECT * FROM encuesta WHERE idencuesta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta1($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta2($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta3($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta4($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta4 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta5($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta5 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta6r1($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta6r1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta6r2($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta6r2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta6r3($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta6r3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta6r4($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta6r4 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta7($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta7 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta8($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta8 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta9($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta9 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPregunta10($value) {
        $sql = 'SELECT * FROM encuesta WHERE pregunta10 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByConstancia($value) {
        $sql = 'SELECT * FROM encuesta WHERE constancia = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByPregunta1($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta2($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta3($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta4($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta4 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta5($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta5 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta6r1($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta6r1 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta6r2($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta6r2 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta6r3($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta6r3 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta6r4($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta6r4 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta7($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta7 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta8($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta8 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta9($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta9 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPregunta10($value) {
        $sql = 'DELETE FROM encuesta WHERE pregunta10 = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByConstancia($value) {
        $sql = 'DELETE FROM encuesta WHERE constancia = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return EncuestaMySql 
     */
    protected function readRow($row) {
        $encuesta = new Encuesta();

        $encuesta->idencuesta = $row['idencuesta'];
        $encuesta->pregunta1 = $row['pregunta1'];
        $encuesta->pregunta1 = $row['pregunta2'];
        $encuesta->pregunta1 = $row['pregunta3'];
        $encuesta->pregunta1 = $row['pregunta4'];
        $encuesta->pregunta1 = $row['pregunta5'];
        $encuesta->pregunta1 = $row['pregunta6r1'];
        $encuesta->pregunta1 = $row['pregunta6r2'];
        $encuesta->pregunta1 = $row['pregunta6r3'];
        $encuesta->pregunta1 = $row['pregunta6r4'];
        $encuesta->pregunta1 = $row['pregunta7'];
        $encuesta->pregunta1 = $row['pregunta8'];
        $encuesta->pregunta1 = $row['pregunta9'];
        $encuesta->pregunta1 = $row['pregunta10'];
        $encuesta->pregunta1 = $row['constancia'];
        return $encuesta;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return EncuestaMySql 
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>