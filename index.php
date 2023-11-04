<?php

require 'function.php';
require 'form.html';

$pdo = connectToDb();

$users = selectAll($pdo, 'users', 'User');

// require 'index.view.php';

?>