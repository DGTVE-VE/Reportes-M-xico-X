<?php
/*
 * Class return connection to database
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionFactory{
	
	/**
	 * Zwrocenie polaczenia
	 *
	 * @return polaczenie
	 */
	static public function getConnection(){
                $host = $_SESSION['config']['database']['host'];
                $user = $_SESSION['config']['database']['user'];
                $pass = $_SESSION['config']['database']['pass'];
                $name = $_SESSION['config']['database']['name'];
//		$conn = mysql_connect(ConnectionProperty::getHost(), 
//                                      ConnectionProperty::getUser(), 
//                                      ConnectionProperty::getPassword());                
//		mysql_select_db(ConnectionProperty::getDatabase());
                $conn = mysql_connect($host, $user, $pass);
		mysql_select_db($name);
		if(!$conn){
                    $mensaje = mysql_error ( );
			throw new Exception('could not connect to database '. $mensaje);
                        
		}
		return $conn;
	}

	/**
	 * Zamkniecie polaczenia
	 *
	 * @param connection polaczenie do bazy
	 */
	static public function close($connection){
		mysql_close($connection);
	}
}
?>