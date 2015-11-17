<?php
/**
 * Object executes sql queries
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */

class QueryExecutor {
    
    private static $transaction;
    private static $connection;
    
    private static function getConnection (){        
        if (!self::$transaction) {
            self::$connection = new Connection();
        } else {
            self::$connection = self::$transaction->getConnection();
        }
        return self::$connection;
    }
    
    private static function executeQuery ($sqlQuery){
        self::$transaction = Transaction::getCurrentTransaction();
        self::$connection = self::getConnection ();
        $query = $sqlQuery->getQuery();
        self::$connection->executeQuery("SET NAMES 'utf8'");
        $result = self::$connection->executeQuery($query);
        if (!$result) {
//            throw new Exception("SQL Error: -->" . $query . "<--" . mysql_error());
            throw new Exception(mysql_error());
        }
        return $result;
    }
    
    private static function freeMemory ($result = NULL){
        if (!is_null($result)){
            mysql_free_result($result);
        }
        if (!self::$transaction) {
            self::$connection->close();
        }
    }
    
    /**
     * Wykonaniew zapytania do bazy
     *
     * @param sqlQuery obiekt typu SqlQuery
     * @return wynik zapytania 
     */
    public static function execute($sqlQuery, $buscaEnCache=true) {
        /**************************************/
        /** Se busca en cache el resultado **/
//        $memcache = new Memcache;
//        if ($buscaEnCache){            
//            $key = md5($sqlQuery->getQuery ());
//            $data = $memcache->get($key);        
//            if ($data !== false){
//                return $data; 
//            }
//        }
        /***************************************/
        $result = self::executeQuery($sqlQuery);
        $i = 0;
        $tab = array();
        while ($row = mysql_fetch_array($result)) {
            $tab[$i++] = $row;
        }
        self::freeMemory($result);
        // Se guarda el resultado en cache
//        $memcache->set($key, $tab);
        return $tab;
    }

    public static function executeUpdate($sqlQuery) {
        self::executeQuery($sqlQuery);
        $affectedRows = mysql_affected_rows();
        self::freeMemory();
        return $affectedRows;
    }

    public static function executeInsert($sqlQuery) {
        self::executeQuery($sqlQuery);
        $id = mysql_insert_id();
        self::freeMemory();   
        return $id;
    }

    /**
     * Wykonaniew zapytania do bazy
     *
     * @param sqlQuery obiekt typu SqlQuery
     * @return wynik zapytania 
     */
    public static function queryForString($sqlQuery) {
        $result = self::execute($sqlQuery);
        $row = $result[0];                
        return $row[0];
    }

}
//class QueryExecutor{
//
//	/**
//	 * Wykonaniew zapytania do bazy
//	 *
//	 * @param sqlQuery obiekt typu SqlQuery
//	 * @return wynik zapytania 
//	 */
//	public static function execute($sqlQuery){
//		$transaction = Transaction::getCurrentTransaction();
//		if(!$transaction){
//			$connection = new Connection();
//		}else{
//			$connection = $transaction->getConnection();
//		}		
//		$query = $sqlQuery->getQuery();
////                $pos = strpos($query, "null");
////                if ($pos != false) {
////                    if(true) {
////                      writeToFile($query);
////                    }
////                }
//                self::$connection->executeQuery("SET NAMES 'utf8'");
//		$result = $connection->executeQuery($query);
//		if(!$result){
//			throw new Exception("SQL Error: -->".$query."<--" . mysql_error());
//		}
//		$i=0;
//		$tab = array();
//		while ($row = mysql_fetch_array($result)){
//			$tab[$i++] = $row;
//		}
//		mysql_free_result($result);
//		if(!$transaction){
//			$connection->close();
//		}
//		return $tab;
//	}
//	
//	
//	public static function executeUpdate($sqlQuery){
//		$transaction = Transaction::getCurrentTransaction();
//		if(!$transaction){
//			$connection = new Connection();
//		}else{
//			$connection = $transaction->getConnection();
//		}		
//		$query = $sqlQuery->getQuery();
//		$result = $connection->executeQuery($query);
//		if(!$result){
//			throw new Exception("SQL Error: -->".$query."<--" . mysql_error());
//		}
//		return mysql_affected_rows();		
//	}
//
//	public static function executeInsert($sqlQuery){
//		QueryExecutor::executeUpdate($sqlQuery);
//		return mysql_insert_id();
//	}
//	
//	/**
//	 * Wykonaniew zapytania do bazy
//	 *
//	 * @param sqlQuery obiekt typu SqlQuery
//	 * @return wynik zapytania 
//	 */
//	public static function queryForString($sqlQuery){
//		$transaction = Transaction::getCurrentTransaction();
//		if(!$transaction){
//			$connection = new Connection();
//		}else{
//			$connection = $transaction->getConnection();
//		}
//		$result = $connection->executeQuery($sqlQuery->getQuery());
//		if(!$result){
//			throw new Exception("SQL Error: -->".$sqlQuery->getQuery()."<--" . mysql_error());
//		}
//		$row = mysql_fetch_array($result);		
//		return $row[0];
//	}
//
//}
?>