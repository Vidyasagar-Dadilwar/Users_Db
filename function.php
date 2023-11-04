<?php
require 'user.php';

function connectToDb(){
    try{
        $pdo = new PDO(
            'mysql:host=127.0.0.1;port=3306;dbname=assignment_user', 
            'root', 
            ''
        );
         return $pdo;
    }
    catch(Exception $e){
        echo "Cannot connect to the database";
    }
}

function insert(PDO $pdo,string $table,$data){
    $sql="INSERT INTO $table SET ";
    foreach($data as $field=>$value){
        $feildSQL[]="$field = '$value'";
    }
    $sql .=implode(',',$feildSQL);
    $statement=$pdo->prepare($sql);
    $statement->execute();
    // var_dump($sql);
}

function selectAll(PDO $pdo, string $table, string $class){
    $statement = $pdo->prepare("SELECT * FROM $table");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_CLASS, $class);  
    return $users;
}

?>
