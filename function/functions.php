<?php
class database
{
	function connection()
	{
 	  $dsn = 'mysql:host=localhost;dbname=webdesigning2';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo error;
       
        exit();
    }
	return $db;
    }
}

?>