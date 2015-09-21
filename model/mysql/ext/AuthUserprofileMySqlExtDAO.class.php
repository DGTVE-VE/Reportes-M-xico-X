<?php

/**
 * Class that operate on table 'auth_userprofile'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class AuthUserprofileMySqlExtDAO extends AuthUserprofileMySqlDAO {

    public function queryPorcentaje() {
        $sql = "SELECT gender as 'Genero',"
                . " count(gender)/(SELECT count(*) "
                . "FROM auth_userprofile "
                . "WHERE gender != '')*100 as '%' "
                . "FROM auth_userprofile p "
                . "WHERE gender != '' "
                . "GROUP BY gender";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

    public function queryUserProfileEdad() {
        $sql = "SELECT COUNT(*)/(SELECT COUNT(*) FROM auth_userprofile WHERE year_of_birth IS NOT NULL) *100 as '%', 
CASE
	WHEN Edad <= 15 THEN ' Menores a 15 '
	WHEN Edad >15 AND Edad <=20 THEN '15 - 20'
	WHEN Edad >20 AND Edad <=25 THEN '20 - 25'
	WHEN Edad >25 AND Edad <=30 THEN '25 - 30'
WHEN Edad >30 AND Edad <=35 THEN '30 - 35'
WHEN Edad >35 AND Edad <=40 THEN '35 - 40'
WHEN Edad >40 AND Edad <=45 THEN '40 - 45'
WHEN Edad >45 AND Edad <=50 THEN '45 - 50'
WHEN Edad >50 THEN 'Mayores a 50'
END AS 'Rangos'
FROM 
(SELECT  YEAR(CURDATE()) - year_of_birth as 'Edad' FROM auth_userprofile WHERE year_of_birth IS NOT NULL) as t
GROUP BY Rangos;";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

    public function queryEstados() {
        $sql = "SELECT 
CASE 
WHEN country = 'AG' THEN 'Aguascalientes'
WHEN country = 'BC' THEN 'Baja California' 
WHEN country = 'BS' THEN 'Baja California Sur' 
WHEN country = 'CC' THEN 'Campeche' 
WHEN country = 'CS' THEN 'Chiapas'
WHEN country = 'CH' THEN 'Chihuahua'
WHEN country = 'CL' THEN 'Coahuila'
WHEN country = 'CM' THEN 'Colima'
WHEN country = 'DF' THEN 'Distrito Federal'
WHEN country = 'DG' THEN 'Durango'
WHEN country = 'GT' THEN 'Guanajuato'
WHEN country = 'GR' THEN 'Guerrero'
WHEN country = 'HG' THEN 'Hidalgo'
WHEN country = 'JC' THEN 'Jalisco'
WHEN country = 'MN' THEN 'Michoacán'
WHEN country = 'MS' THEN 'Morelos'
WHEN country = 'MC' THEN 'Estado de México'
WHEN country = 'NT' THEN 'Nayarit'
WHEN country = 'NL' THEN 'Nuevo León'
WHEN country = 'OC' THEN 'Oaxaca'
WHEN country = 'PL' THEN 'Puebla'
WHEN country = 'QT' THEN 'Querétaro'
WHEN country = 'QR' THEN 'Quintana Roo'
WHEN country = 'SP' THEN 'San Luis Potosí'
WHEN country = 'SL' THEN 'Sinaloa'
WHEN country = 'SR' THEN 'Sonora'
WHEN country = 'TC' THEN 'Tabasco'
WHEN country = 'TS' THEN 'Tamaulipas'
WHEN country = 'TL' THEN 'Tlaxcala'
WHEN country = 'VZ' THEN 'Veracruz'
WHEN country = 'YN' THEN 'Yucatán'
WHEN country = 'ZS' THEN 'Zacatecas'
WHEN country = 'EX' THEN 'Extranjero'
END as Estados, count(country)/(SELECT count(*) FROM auth_userprofile WHERE country != '')*100 as '%' FROM auth_userprofile p WHERE country != '' GROUP BY country;";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

    public function queryNivelEstudios() {
        $sql = "SELECT CASE
WHEN level_of_education='a' THEN 'Grado técnico'
WHEN level_of_education='p' THEN 'Doctorado'
WHEN level_of_education='m' THEN 'Maestría'
WHEN level_of_education='b' THEN 'Licenciatura'
WHEN level_of_education='hs' THEN 'Bachillerato'
WHEN level_of_education='jhs' THEN 'Formación media'
WHEN level_of_education='el' THEN 'Primaria'
WHEN level_of_education='none' THEN 'Ninguno'
WHEN level_of_education='other' THEN 'Otro'
END as Nivel,
COUNT(*)/(SELECT COUNT(*) FROM auth_userprofile WHERE level_of_education IS NOT NULL 
AND level_of_education != '')*100 as '%'
FROM auth_userprofile 
WHERE level_of_education IS NOT NULL 
AND level_of_education != ''
GROUP BY level_of_education
ORDER BY Nivel;";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

}

?>