<?php

$dbPassword = "1935ACHmed";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database connection failed. Reason: ".$connection->connect_error);
}

$query = "DELETE FROM Authors WHERE id = 4";
// $query = "UPDATE Authors SET pen_name = 'Abracadabra' WHERE id = 6";
// $query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Julien', 'De Gieter', 'JD Gieter')";

$connection->query($query);

echo "Newly created Author Id: ".$connection->insert_id;

$connection->close();
?>