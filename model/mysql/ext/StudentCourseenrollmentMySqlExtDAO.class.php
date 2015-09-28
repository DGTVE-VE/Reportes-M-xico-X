<?php

/**
 * Class that operate on table 'student_courseenrollment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class StudentCourseenrollmentMySqlExtDAO extends StudentCourseenrollmentMySqlDAO {

    public function querySumStudent() {
        
        $sql = "SELECT  c.course_name, 
                COUNT(*) 'Usuarios_registrados', 
                SUM(u.is_active) 'Usuarios_activos', 
                SUM(is_staff) 'Staff' 
                FROM auth_user u, student_courseenrollment s, course_name c 
                WHERE 
                s.course_id = c.course_id AND
                s.user_id = u.id  AND 
                s.is_active = 1 
                GROUP BY s.course_id
                UNION
                SELECT 'TOTALES:', 
                SUM(Usuarios_registrados) 'Total Registrados',
                SUM(Usuarios_Activos) 'Total activos', 
                SUM(Staff) 'Total Staff' 
                FROM (SELECT  s.course_id, COUNT(*) 'Usuarios_registrados', 
                                SUM(u.is_active) 'Usuarios_Activos', 
		SUM(is_staff) 'Staff' 
		FROM auth_user u, student_courseenrollment s, course_name c  
		WHERE 
		s.course_id = c.course_id AND
		s.user_id = u.id  AND 
		s.is_active = 1
		GROUP BY s.course_id) as T;";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }
    public function queryDescarga($cursoId,$url) {
        $sql = "SELECT 
                p.name, 
                u.email, 
                p.year_of_birth, 
                p.level_of_education, 
                p.gender, 
                p.country
                FROM auth_user u, auth_userprofile p, student_courseenrollment c 
                WHERE 	p.user_id = c.user_id 
                AND 	u.id = p.user_id
                AND 	course_id = '".$cursoId."'
                INTO OUTFILE '".$url."'
                FIELDS TERMINATED BY ','
                ENCLOSED BY '\"\'
                LINES TERMINATED BY '\r\n';";
    }
}

?>