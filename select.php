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

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObject = $connection->query($query);

if($resultObject->num_rows > 0)
{
    while($singleRowFromQuery = $resultObject->fetch_assoc())
    {
        // print_r($singleRowFromQuery);
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
    }
}
$resultObject->close();
$connection->close();
?>
