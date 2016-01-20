<?php

/**
 * Class that operate on table 'constancias'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class ConstanciasMySqlExtDAO extends ConstanciasMySqlDAO {

    public function queryPorCurso() {
        $sql = "SELECT DISTINCT institucion,periodo, curso FROM constancias WHERE  enviado = 0 AND correo = 'soniamartinezctr@gmail.com'";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

    public function queryByCursoPeriodo($periodo, $curso) {
        $sql = "SELECT * FROM constancias WHERE curso = ? AND periodo = ? AND enviado = 0 AND correo = 'soniamartinezctr@gmail.com'";
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($curso);
        $sqlQuery->set($periodo);
        return $this->getList($sqlQuery);
    }

    public function updateEnviaConstancia($id) {
        $sql = "UPDATE constancias SET enviado=1 WHERE id= ?";
        $sqlQuery = new SqlQuery($sql);        
        $sqlQuery->setNumber($id);
        return $this->executeUpdate($sqlQuery);
    }

}

?>