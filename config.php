<?php 

$base_url = "http://localhost/site-veiculos/";

$database = 'veiculos';
$server = 'localhost';
$user = 'root';
$pass = '';

global $conn;

try {

    $conn = new PDO("mysql:host=$server;dbname=$database", $user, $pass);

} catch(PDOException $e) {
    die("FALHA DE CONEXÃO COM O BANCO DE ADDOS: " . $e->getMessage());
}
