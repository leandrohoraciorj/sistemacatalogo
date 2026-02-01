<?php

$con = mysqli_connect('localhost', 'usuario_banco', 'senha_banco', 'nome_banco');
$con->set_charset('utf8mb4');

if(mysqli_connect_errno()){
    echo "MySql Connection Error<br>";
    die;
}