<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

include('connection.php');

$connection = new Connection();
$connection->selectDatabase('MUSIC_PHP_PROJ');

include('User.php');

Client::deleteClient('Clients',$connection->conn,$id);




}
?>
