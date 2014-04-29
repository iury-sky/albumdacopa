<?php
	
require_once('global.php');
require_once('connection.php');

	$db = $database;
	$db_table ="figurinha";
	$banco = mysql_select_db($db,$conexao);
	$query = "select * from $db_table";
	$result = mysql_query($query,$conexao)or die (mysql_error());
	$num_row = mysql_num_rows($result);/*usarie para fazer a contagem de cartas*/
	$row=mysql_fetch_assoc($result);

	for($i = 0; $i < $num_row; $i++){
		
		print("<div>figurinha</div>");
	}	

	  	
				  	
 ?>
		
