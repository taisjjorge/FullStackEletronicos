<!-- 
    require_once "./actions/db_connect.php";

    $result = query("SELECT * FROM produtos");
    $produtos = [];

    while($row = mysqli_fetch_assoc($result)){
        $produtos[] = $row;
    }

    header("Access-Control-Allow-Origin:*"); //habilita consultas na api
    var_dump($produtos);
    print_r(json_encode($produtos));
 -->

 

    <!-- header("Access-Control-Allow-Origin:*");
    require_once "./actions/db_connect.php";


        $sql = "SELECT * FROM produtos";
        $result = mysql_query($connect, $sql);  // Puxando a função query da pagina connect_bd
        $produtos = [];

    while ($row = mysqli_fetch_assoc($result)){
        $produtos [] = $row;
    }

    echo json_encode($produtos); -->



<?php

    //API

        require_once "../actions/db_connect.php";

    $result = $conn->query("SELECT * FROM produtos");
    $produtos = [];

    while ($row = mysqli_fetch_assoc($result)){
        $produtos [] = $row;
    }

    header("Access-Control-Allow-Origin:*");
    echo json_encode($produtos);

?>
