<?php 

/* Conexao com o DB */
$conexao = mysql_connect($host, $user, $pass); //essa linha irá fazer a conexão com o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());//aqui irei testar se houve falha de conexão

?>