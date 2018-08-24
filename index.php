<?php

echo "Hello World! lon PHP  bum buM bUM BUM mysql<br/>";

$host='leowordpress01app-mysqldbserver.mysql.database.azure.com';
$dbname='mysqldatabase44817';
$username = 'lonadmin@leowordpress01app-mysqldbserver';
//$username = 'lonadmin';
$password = '@dmin1234';

$conn = mysqli_init();

mysqli_real_connect($conn, $host, $username, $password, $dbname, 3306);
mysqli_real_connect($conn, $host, $username, $password, $dbname, 3306);

if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$res = mysqli_query($conn,"SELECT * FROM ZFO_USERS");
while ($row = mysqli_fetch_assoc($res)) {
    var_dump($row);
    }
//Close the connection
mysqli_close($conn);