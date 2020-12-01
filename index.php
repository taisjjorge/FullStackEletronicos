<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <title>FullStackEletro</title>
</head>
<body>

    <!-- ###INICIO MENU #### -->
    <nav style="display:flex;">
        <img class="logo" src="./imagens/logo.full.png">
        <ul id="navegacao">
            <li>
                <a href="./index.php" onmouseover="aumenta_menu(this)"
                onmouseout="diminui_menu(this)">Página inicial</a>
            </li>
            <li>
                <a href="./php/produtos.php" onmouseover="aumenta_menu(this)"
                onmouseout="diminui_menu(this)">Produtos</a>
            </li>
            <li>
                <a href="./php/contatos.php" onmouseover="aumenta_menu(this)"
                onmouseout="diminui_menu(this)">Contatos</a>
            </li>
            <li>
                <a href="./php/pedidos.php" onmouseover="aumenta_menu(this)"
                onmouseout="diminui_menu(this)">Pedidos</a>
            </li>
        </ul>
        
    </nav>
    <!-- ### FIM MENU ### -->
    <p>Confira nossas ofertas!</p>
    <footer>
        <p>Todos os direitos reservados &copy; 2020</p>
    </footer>



    <script src="./js/script.js"></script>
</body>
</html>