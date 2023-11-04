<?php

require 'function.php';
require 'form.html';

$pdo = connectToDb();

$data=[
    'name'=>$_POST['name'],
    'mail'=>$_POST['mail'],
    'gender'=>$_POST['gender'],
    'city'=>$_POST['city']
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insert($pdo,'users',$data);
}

$users = selectAll($pdo, 'users', 'User');


// require 'index.view.php';
?>