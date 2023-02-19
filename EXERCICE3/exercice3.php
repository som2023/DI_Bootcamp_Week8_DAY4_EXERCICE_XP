<?php 
// Create a database connection to the PostgreSQL server.
$host= 'localhost';
$port= '5432';
$db = 'public';
$user = 'postgres';
$password = 'postgres';
$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$password");

// Create a Sql query for insert.
$sql = "INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (1, 'Paul', 32, 'California', 20000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );";

// Execute the query to insert to the tabl
$result = pg_query($conn, $sql);

//Close the database connection.
pg_close($conn);

?>