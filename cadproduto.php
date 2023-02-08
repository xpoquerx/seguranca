<?php
include "conexao.php";
/*variável php tem que começar com $ recebe a variavel do formulário*/
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$qtd = $_POST['qtd'];
$sql = "insert into produto values (null, '".$descricao."', '".$qtd."', '".$preco."')";

if(mysqli_query($conexao, $sql)) {
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
}
mysqli_close($conexao);
?>
<br>
