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
	*
	*	
	* @param string $nomeTime
	* @return integer
	*/
	public function getIDTime($nomeTime) 
	{
		$this->conn->Connect();	
		$result = mysql_query("SELECT id FROM times WHERE nome='{$nomeTime}';");
		$row = mysql_fetch_array($result) or die ('Busca de o seguinte erro'. mysql_error());

		return ($row) ? $row[0] : false;
	}




	/** 
	* @param undefined $id_
	* 
	* @return mixed Retorna um Array com uma lista com a coleção, ou uma mensagem de erro 
	*/
	public function obterColecao ($id_)
	{		
		$rows = [];
		$fig = new Figurinha();

		$this->conn->Connect();
		
		$result = mysql_query("SELECT figurinha.* FROM album 
			                   INNER join figurinha ON album.id_figurinha = figurinha.id 
			                   WHERE album.id_usuario=$id_
			                   GROUP BY figurinha.id_time;") or die ('Busca de o seguinte erro'.mysql_error());		

		$num_row = mysql_num_rows($result);

		if ($num_row) {
			//guarda todos os resultados da query em um array associativo
			while($row = mysql_fetch_assoc($result)){
			     $rows[] = $row;
			}
			mysql_free_result($result);

			return $rows;
		} 
		else {
			return false;
		}					
	}

	/** 
	* Retorna um Array com uma lista com a coleção, ou uma mensagem de erro 
	*
	* @param undefined $id_
	* @param string $time
	* 
	* @return mixed 
	*/
	public function obterColecaoTime ($id_, $time_)
	{
		$rows = [];
		$fig = new Figurinha();

		$this->conn->Connect();





		
		$result = mysql_query("SELECT figurinha.* FROM album 
			                   INNER join figurinha ON album.id_figurinha = figurinha.id 
			                   WHERE album.id_usuario=$id_ AND figurinha.id_time = $id_time
			                   GROUP BY figurinha.id_time;") or die ('Busca de o seguinte erro'.mysql_error());		

		$num_row = mysql_num_rows($result);

		if ($num_row) {
			//guarda todos os resultados da query em um array associativo
			while($row = mysql_fetch_assoc($result)){
			     $rows[] = $row;
			}
			mysql_free_result($result);

			return $rows;
		} 
		else {
			return false;
		}		
	}
	
}
?>