<?php  
    require_once('inc/global.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Álbum da Copa: Prototipo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet/less" type="text/css" href="css-less/main.less" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Nome do Projeto</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Início</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div><!-- .navbar -->

        <div class="container">

            <div class="starter-template">
                <h1>Álbum da Copa</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>

            <div class="col-xs-6">
                <form method="POST" action="inc/cadastro_usuario.php">
                    <div class="form-group">
                        <label for="user_nome" class="label-control">Nome:</label>
                        <input type="text" placeholder="Digite seu nome" class="form-control" id="user_nome" name="user_nome">                    
                    </div>
                    <div class="form-group">
                        <label for="user_email" class="label-control">E-mail:</label>
                        <input type="email" placeholder="Digite seu e-mail" class="form-control" id="user_email" name="user_email">                    
                    </div>
                    <div class="form-group">
                        <label for="user_idade" class="label-control">Idade:</label>
                        <input type="text" placeholder="Digite seu e-mail" class="form-control" id="user_idade" name="user_idade">                    
                    </div>
                    <div class="form-group">
                        <label for="user_sexo" class="label-control">Idade:</label>
                        <select class="form-control" id="user_sexo" name="user_sexo">
                            <option></option>
                            <option value="0">Masculino</option>
                            <option value="1">Feminino</option>
                        </select>                
                    </div>
                    <div class="form-group">
                        <label for="user_senha" class="label-control">Senha:</label>
                        <input type="text" placeholder="Digite sua senha" class="form-control" id="user_senha" name="user_senha">                    
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cadastrar!" class="btn" />
                    </div>
                </form>
            </div>


        </div><!-- /.container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/less.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
