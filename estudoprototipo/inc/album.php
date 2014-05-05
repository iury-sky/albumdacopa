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
	
	public function Album(){
		
		$this->conn = new Conexao();
	
	}

/** 
* @param undefined $id_
* 
* @return uma lista com a coleção
*/
	public function obterColecao ($id_){
		
		$colecao= array();
		
		$this->conn->Connect();
		
		$fig = new Figurinha();
		
		$result = mysql_query("SELECT figurinha.id, figurinha.label, figurinha.img_url, figurinha.posicao, figurinha.id_time FROM album 
			INNER join figurinha ON album.id_figurinha = figurinha.id WHERE album.id_usuario=$id_;") or die ('Busca de o seguinte erro'.mysql_error());
			
		;
				
		while($row = mysql_fetch_row($result,MYSQL_ASSOC)) {
			$fig = new Figurinha();
			
			$fig->setId($row['id']);
			$fig->setLabel($row['label']);
			$fig->setUrl($row['img_url']);
			
			$fig->setTeam($row['id_time']);
			array_push($colecao,$fig);
			
		}

//		while($row = mysql_fetch_row($result,MYSQL_ASSOC)) {
//					
//			print("<div> ");
//			print($row['id']);
//			print($row['label']);
//			print($row['img_url']);
//			print($row['id_time']);
//			print("</div> ");
//		}
		$this->conn->disconnect();
		return $colecao;
		
					
	}
	
}


	//$album = new Album();
	//$album->obterColecao('9');



?>