<?php
require_once('global.php');
require_once('connection.php');

session_start();

$nome = $_POST['user_nome'];
$sobrenome = $_POST['user_sobrenome'];
$email = $_POST['user_email'];
$idade = $_POST['user_idade'];
$sexo = $_POST['user_sexo'];
$senha = $_POST['user_senha'];

// converte a senha para md5
$senha_md5 = md5( $senha );

//conectando com a tabela do banco de dados
$db = $database;
$db_table = "usuario";
$banco = mysql_select_db($db, $conexao); //nome da tabela onde os dados serão armazenados

//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `$db_table` ( `nome`, `sobrenome` ,`email` ,`idade` ,`sexo` ,`senha` ) 
VALUES ( '$nome', '$sobrenome', '$email', '$idade', '$sexo', '$senha_md5' )";

mysql_query($query, $conexao) or die (mysql_error());;

//Processa o login
$_SESSION['user_name']=$nome;
$_SESSION['user_surname']=$sobrenome;
$_SESSION['email']=$email;
$logged_in = true;

// deu tudo certo
echo 'true';

?>