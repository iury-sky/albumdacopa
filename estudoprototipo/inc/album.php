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
		
		//$fig = new Figurinha();
		
		$result = mysql_query("SELECT figurinha.* FROM album 
			INNER join figurinha ON album.id_figurinha = figurinha.id WHERE album.id_usuario=$id_;") or die ('Busca de o seguinte erro'.mysql_error());
			
		;
				
		while($row = mysql_fetch_row($result,MYSQL_ASSOC)) {
			array_push($colecao,new Figurinha($row['id'],$row['label'],$row['img_url'],$row['posicao'],$row['id_time']));
			
//			$fig->setId($row['id']);
//			$fig->setLabel($row['label']);
//			$fig->setUrl($row['img_url']);
//			$fig->setPosition($row['position']);
//			$fig->setTeam($row['id_time']);
			
			
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
		mysql_free_result($result);;
		return $colecao;
		
					
	}
	
}


	//$album = new Album();
	//$album->obterColecao('9');



?>