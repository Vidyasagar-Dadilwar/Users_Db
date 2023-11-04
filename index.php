<?php

require 'function.php';
require 'index.html';

$pdo = connectToDb();

$users = selectAll($pdo, 'users', 'User');

// require 'index.view.php';

?>