<?php

/**
 * Class that operate on table 'auth_user'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-09-03 19:31
 */
class AuthUserMySqlExtDAO extends AuthUserMySqlDAO {

    public function queryTotUser() {
        $sql = "select COUNT(*) as total FROM auth_user WHERE is_staff = 0 AND is_superuser = 0";
        $sqlQuery = new SqlQuery($sql);
        $result = QueryExecutor::execute($sqlQuery);
        return $result;
    }

}

?>