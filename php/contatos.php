<?php 
    include_once "./includes/cabecalho.php";
    include_once "./includes/menu.php";
?>
    
    <form class="formulario-contato">
        <div class="formulario-grupo">
            <label for="">Nome</label>
            <input type="text">
        </div>
        <div class="formulario-grupo">
            <label>Mensagem</label>
            <textarea></textarea>
            <input type="submit" value="Enviar">
        </div>
    </form>

<?php 
    include_once "./includes/rodape.php";
?>