<?php
require_once('global.php');
require_once('connection.php');
require_once('figurinha.php');

Class Album {

	var $conn = NULL;
	
	/**
	*	Construtor
	*
	*	cria a instacia de conexao com o banco de dados
	*	
	*/
	public function Album()
	{	
		$this->conn = new Conexao();
	}

	/** 
	* @param undefined $id_
	* 
	* @return uma lista com a coleção
	*/
	public function obterColecao ($id_)
	{		
		$this->conn->Connect();
		
		$fig = new Figurinha();
		
		$result = mysql_query("SELECT figurinha.* FROM album INNER join figurinha ON album.id_figurinha = figurinha.id WHERE album.id_usuario=$id_;") or die ('Busca de o seguinte erro'.mysql_error());		

		//guarda todos os resultados da query em um array associativo
		while($row = mysql_fetch_assoc($result)){
		     $rows[] = $row;
		}

		mysql_free_result($result);

		return $rows;					
	}
	
}
?>