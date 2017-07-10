<?php
    $dsn = 'sql1.njit.edu';
    $username = 'pg376';
    $password = 'oOA310Yzl';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>