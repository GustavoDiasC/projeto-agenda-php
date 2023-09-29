<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";

    try{

        $conn = new PDO("mysql:hot=$host;dbname=$dbname", $user, $pass);

        //ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "ERRO: $error";
    }
?>