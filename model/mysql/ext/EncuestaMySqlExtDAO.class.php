<?php

/**
 * Class that operate on table 'encuesta'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class EncuestaMySqlExtDAO extends EncuestaMySqlDAO {

    public function queryGraficaPregunta1($pregunta) {
        $sql = "SELECT count(*) as total, $pregunta, "
                . "count(*)/(SELECT COUNT(*) FROM encuesta)*100 as '%' "
                . "FROM encuesta GROUP BY $pregunta order by total desc";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

    public function queryGraficaPregunta2($pregunta) {
        $sql = "SELECT count(*) as total, $pregunta, count(*)/(SELECT COUNT(*) FROM encuesta)*100 as '%' 
                FROM encuesta GROUP BY $pregunta HAVING COUNT(*)>1
                UNION
                SELECT SUM(total), 'Otro', count(*)/(SELECT COUNT(*) FROM encuesta)*100 as '%'
                FROM (
                SELECT count(*) as total, $pregunta FROM encuesta  GROUP BY $pregunta HAVING COUNT(*) = 1) as T
                order by total desc    
                ";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }
    
    public function queryTotalEncuesta() {
        $sql = "SELECT count(*) as tot FROM encuesta";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }
    
        public function queryConstancia() {
        $sql = "SELECT constancia FROM encuesta WHERE idencuesta = 2";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }
}

?>