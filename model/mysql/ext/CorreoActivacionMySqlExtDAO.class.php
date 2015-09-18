<?php
/**
 * Class that operate on table 'correo_activacion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class CorreoActivacionMySqlExtDAO extends CorreoActivacionMySqlDAO{

    	public function queryByHashAndCorreo($value1, $value2){
		$sql = 'SELECT * FROM correo_activacion WHERE correo = ? AND hash = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value1);
                $sqlQuery->set($value2);
		return $this->getRow($sqlQuery);
	}
	
}
?>