<?php

/**
 * Class that operate on table 'courseware_studentmodule'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class CoursewareStudentmoduleMySqlExtDAO extends CoursewareStudentmoduleMySqlDAO {

    public function queryUsuariosActivosDesde ($fecha) {
        $sql = "SELECT COUNT(*) 'Usuarios', course_name, fecha
                FROM (
                SELECT DISTINCT
                student_id, course_name, date(created) fecha
                FROM courseware_studentmodule c, course_name n
                WHERE c.course_id = n.course_id AND created >= ?
                ) as T 
                GROUP BY course_name, fecha;";
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($fecha);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

}

?>