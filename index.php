<?php
require_once 'settings.php';
//подключение к mysql
$connection = new mysqli($host, $user, $password, $data);
if ($connection->connect_error) die('Error connection');

$query = "SELECT * FROM `users`";
$result = $connection->query($query);

if (!$result) die('Error result');

$rows = $result->num_rows;
for($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    echo 'ID: ' . $result->fetch_assoc()['id_user'] . ' ';
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>';
}

$result->close();
$connection->close();

//echo '<pre>';
//print_r($rows);
//echo'</pre>';
?>