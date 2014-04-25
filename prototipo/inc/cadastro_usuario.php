<?php
require_once('global.php');
require_once('connection.php');

$nome = $_POST['user_nome'];
$email = $_POST['user_email'];
$idade = $_POST['user_idade'];
$sexo = $_POST['user_sexo'];
$senha = $_POST['user_senha'];

// converte a senha para md5
$senha_md5 = md5( $senha );


//conectando com a tabela do banco de dados
$database = $database;
$db_table = "usuario";
$banco = mysql_select_db($database, $conexao); //nome da tabela onde os dados serão armazenados

//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `$$db_table` ( `nome` ,`email` ,`idade` ,`sexo` ,`senha` ) 
VALUES ( '$nome', '$email', '$idade', '$sexo', '$senha_md5' )";
//mysql_query($query, $conexao);

echo $query;
die();


?>