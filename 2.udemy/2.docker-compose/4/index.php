<?php
header("content-type: text");
$serverName = 'db'; //The hostname "db" from our docker-compose.yml file!!!
$userName = 'wp';
$password = 'wp2017';
$dbName = 'wp2017';
$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_errno > 0) {
    echo $db->connect_error;
} else {
    echo "DB Connection successful\n\n";

    //we read out the content
    $result=mysqli_query($conn,"SHOW DATABASES;");
    while( $row = mysqli_fetch_row( $result ) ){
        echo $row[0]."\n";
    }
}