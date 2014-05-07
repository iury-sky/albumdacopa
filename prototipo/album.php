<?php 
require_once('inc/header.php'); 
require_once('inc/usuario.php');
require_once('inc/album.php');
if($usuario->usuarioLogado()):
?>  
<div class="container" style="margin-top: 50px;">
    <div class="starter-template">        
        <p class="pull-right"><?php echo $_SESSION['usuario_name'] . " " . $_SESSION['usuario_surname']; ?><br><small>(<?php echo $_SESSION['usuario_email']; ?>)</small></p>
        <h1>Meu álbum</h1>

        <div id="album">

        	<div id="time1" class="time">
        		
        		<div class="figurinha pull-left">
        		<?php 
                    $indice = 0;
        			$album = new Album();

        			$colecao = $album->obterColecao( $usuario->getID() );

                    if (isset($colecao)): 
        			 foreach ($colecao as $item):
                ?>
                    <div id="figurinha-<?php echo $indice; ?>" class="figurinha pull-left" style="margin-right:10px">
                        <img src="<?php echo 'img/' . $item['img_url']; ?>" width="200" />
                        <div class="titulo"><?php echo $item['label']; ?></div>
                    </div><!-- .figurinha -->

                <?php 
                    $indice++;
                      endforeach; 
                    else:
                ?>
                    Album está vazio, que tal responder uma pergunta e começar sua coleção?
                <?php                        
                    endif;
                ?>      			
        			
        		</div><!-- .figurinha -->
                <div class="clearfix"></div>
        	</div><!-- .time -->

        </div>

    </div>
</div><!-- /.container -->
<?php 
else: 
    require_once('inc/login_fail.php');
endif; //login check 

require_once('inc/footer.php'); 
?>
