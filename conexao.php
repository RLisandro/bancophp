<?php // Conexão com o banco de dados .Modo padrão de criar.
$conexao=mysqli_connect("localhost","root","","cadastro");


if(!$conexao){
    echo "Erro ao conectar com o banco de dados";
    exit;
}
else{
    echo "Conectado com sucesso";
}    
?>