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

$tempFirstName = "Dieter";

$query = "SELECT first_name, last_name, pen_name FROM Authors Where first_name = ?";
$statementObj = $connection->prepare($query);

$statementObj->bind_param("s", $tempFirstName);
$statementObj->execute();

$statementObj->bind_result($firstName, $lastName, $penName);
$statementObj->store_result();

if($statementObj->num_rows > 0)
{
    while($statementObj->fetch())
    {
        // print_r($singleRowFromQuery);
        echo "$firstName $lastName ($penName)".PHP_EOL;
    }
}
$statementObj->close();
$connection->close();
?>

