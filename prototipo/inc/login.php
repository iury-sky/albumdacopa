<?php 
require_once('global.php');
require_once('connection.php');

session_start();

$email = $_POST['email'];
$password = md5($_POST['pwd']);

//conectando com a tabela do banco de dados
$db = $database;
$db_table = "usuario";
$banco = mysql_select_db($db, $conexao); //nome da tabela onde os dados serão armazenados
$query = "SELECT * FROM $db_table WHERE email='$email' AND senha='$password'";
$result = mysql_query($query, $conexao) or die (mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_assoc($result);

if( $num_row >=1 ) {	
	$_SESSION['user_name']=$row['nome'];
	$_SESSION['user_surname']=$row['sobrenome'];
	$_SESSION['email']=$row['email'];
	$logged_in = true;
	echo 'true';
}
else{
	$logged_in = false;
	echo 'false';
}
?>