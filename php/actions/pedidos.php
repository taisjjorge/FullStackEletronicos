<?php 

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])) {
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_prod = $_POST['nome_prod'];
        $valor_unit = $_POST['valor_unit'];
        $qtd = $_POST['qtd'];
        $valor_final = $_POST['valor_final'];

        $sql = "INSERT INTO pedidos VALUES (null, '$nome_cliente', '$endereco', '$telefone', '$nome_prod', '$valor_unit', $qtd, '$valor_final');";
    
        mysqli_query($connect, $sql);
        
        header("Location: ../produtos.php");
        // header indica o local que será exibido pós ação de envio do formulário
    }

?>