<?php
    $dsn   = 'mysql:host=localhost; dbname=twitter';
    $user ='root';
    $pass='';

    try{
    	$pdo = new pdo($dsn, $user, $pass);
    }catch(PDOException $e){
    	echo 'Connection error!' .$e-> getMessage();
    }

  ?>  