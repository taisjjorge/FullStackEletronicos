<!--  

function query($sql) {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "fullstackeletro";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function nonquery($sql) {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "fullstackeletro";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
}

 -->

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstack";

    //connect db
    $conn = mysqli_connect($servername, $username, $password, $database);
    $conn->set_charset("utf8");

    // Verificação  da conexão com o BD
    if(!$conn){
        die("A conexão falhou".mysqli_connect_error());
    } 
    //else {
    //     echo "Conexão estabelecida";
    // }

?>