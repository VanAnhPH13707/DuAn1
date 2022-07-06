<?php
 function exeQuery($sqlQuery, $getAll = true){
    $host = "127.0.0.1";
    $dbname = "duan1";
    $dbusername = "root";
    $dbpassword = "";
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                            $dbusername, $dbpassword);

    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    if($getAll == true){
        return $stmt->fetchAll();
    } 
    return $stmt->fetch(); 

 }
 function insertDataAndGetId($sql){
    $host = "127.0.0.1";
    $dbname = "duan1";
    $dbusername = "root";
    $dbpassword = "";
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$dbusername, $dbpassword);
   // $connect = get_connect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $id = $connect->lastInsertId();
    return $id;
}
