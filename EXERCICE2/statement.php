<?php



// SQL statement for creating new tables
$statements = [
    'CREATE TABLE COMPANY (
        ID      INT     PRIMARY KEY     NOT NULL,
        NAME    TEXT    NOT NULL,
        AGE     INT     NOT NULL,
        ADDRESS CHAR(50),
        SALARY  REAL
    )'];
    

    $pdo = require_once 'connexion.php';

 
    foreach ($statements as $statement) {
        
        $pdo->exec($statement);
    }
    pg_close($pdo);  

