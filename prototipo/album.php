<?php 
require_once('inc/header.php'); 

if(isset($_SESSION['email'])): 
?>  
<div class="container">
    <div class="starter-template">        
        <p class="lead">Olá <?php echo $_SESSION['user_name'] . " " . $_SESSION['user_surname']; ?>, </p>
        <h1>Meu álbum</h1>
    </div>
</div><!-- /.container -->
<?php else: ?>
<div class="container">
	Você não está logado.
</div><!-- /.container -->
<?php endif; //login check ?>

<?php require_once('inc/footer.php'); ?>
