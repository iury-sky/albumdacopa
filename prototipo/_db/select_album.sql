select figurinha.id, figurinha.endereco from album 
inner join figurinha on album.id_figurinha = figurinha.id
where album.id_usuario=9;