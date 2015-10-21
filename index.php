<?php
include_once './translate.php';
include_once './code.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title>Siht Framework</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">    
        <link rel="shortcut icon" href="favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
        <!-- Global CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/plugins/prism/prism.css">
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head> 

    <body data-spy="scroll">

        <!---//Facebook button code-->
        <!--        <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>-->

        <!-- HEADER --> 
        <header id="header" class="header">  
            <div class="container">            
                <h1 class="logo pull-left">
                    <a class="scrollto" href="#promo">
                        <span class="logo-title">Siht</span>
                    </a>
                </h1><!--//logo-->              
                <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->            
                    <div class="navbar-collapse collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item sr-only"><a class="scrollto" href="#promo"><?php echo $arrayTextLanguages["HOME_MENU"]["HOME"][$LANGUAGE] ?></a></li>
                            <li class="nav-item"><a class="scrollto" href="#about"><?php echo $arrayTextLanguages["HOME_MENU"]["ABOUT"][$LANGUAGE] ?></a></li>
                            <!--                            <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>-->
                            <li class="nav-item"><a class="scrollto" href="#docs"><?php echo $arrayTextLanguages["HOME_BUTTONS"]["BUTTON2"][$LANGUAGE] ?></a></li>
<!--                            <li class="nav-item"><a class="scrollto" href="#license">License</a></li>                        -->
                            <li class="nav-item last"><a class="scrollto" href="#contact"><?php echo $arrayTextLanguages["HOME_MENU"]["CONTACT"][$LANGUAGE] ?></a></li>
                            <li class="nav-item last">

                                <?php
                                $url = "";
                                switch ($LANGUAGE) {
                                    case "BR":
                                        echo "<a href='?l=EN'><img border='0' style='width:40px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAvCAYAAABe1bwWAAADfElEQVRoQ+2bX0hTURzHv2dO829ONpNMs4ggiF4KzB4KKTOVEjJ1EEWZ+A8q6imlh3qIwPXQH+jBpFooas4/YBD21EuG/YGgeqkWgovp0G3+mzP358S9sGWx7e7eyby73vM0uL9zzu/72fccfmc7l2BFK9MZS0DRAKAAQBYAsvL5an7u+Ni6msMJHYsC1EJARikUbWpD27BvIFZ44c2xxOQkjx6AVugMfPuJBMx/aZPni0ipyTXcdbJgynQ/O0DpGb7iIokXJxiAUtKp6Xt0lpTqfhQTSl5FIlJIX7GCYbVQcoyUtRr7AVQIERdJH1GDAQYZMFMANJGIFNJX3GDoJAOGChGWnRGPhiMa3OibENId4gYDr2AwVQUqnD+kRl37OMx2F284IgcDwWB0p7dgd04iOt/Y0P3WLoNhCKQlKtB1aTsUBKxbGNfwbZJ0zNE9abhSusnPornbjC8mJy82hstbecVHO5j3UspRx+O2NhvqVKU/V8usG61DFnybWAo7/5gG01ikYQEkb1CwgpkltC0zAXHMGgrQnMteeLyA0+WFx0MxNedGc485YGxMg7lQqMapfFXYLlgZ6PJQ3Hlhwch3h/TAMIrK96Wj7rCG3WjDbfNLXtwanMTXEPtOTDvGB6JgZwpayrOgjOOmMz3vxvVeM35ZQ9c2kgDDAKrIV6G2UM1pmmvd5pBO8Q0gGTCZaUrom/JCgllY8kL7YIwTHhMgHTAbldA3hgaz7KaoujcGt5f7+CUZMAd3paK5nPm1M3Rr6THj8zh3sSeZyrepSIPje9NZKnaHB10jNhgtv5GnSYD2QAY2q+LZZwMfZvD4tZWLn9hP1+EfIh/W5LLF3TujA/eHpzC76PGLT1ASFk5lvgommwsXn5rWD5hnTXnoHbXj5ac5BNtBmOPC/h0p6H8/s37AcCrlGSCZPYanbs5wGUwQRDIYGQzn6vknQHZMrDrG4Vzmrt/5mUES0UQGE/h7lMEE8bcMRgbDb+uTHSM7RnYMPwLBHGOtqpPrmABwiAwmSB0jg5HB8Np7mKW0JnfweGUZ9WBqZcAMADgZ9bnFPeEgsVbWF4PQqN/zFTUXghL2X/rpyvoOQqJ7M1ysYPw3w5kETVVXk5Lpgh4E1WJNOCp5ERgWaeo5/7sEvklt1bUnQBW19O/bJ1HJZ40nsRBg1AM8yTS0D/ly+QMpzH7D4sxATQAAAABJRU5ErkJggg=='></a>";
                                        break;
                                    case "EN":
                                        echo "<a href='?l=BR'><img style='width:40px' src='data:image/png;base64,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'></a>";
                                        break;
                                }
                                ?>
                                </a>
                            </li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div>
        </header><!--//header-->

        <!-- PROMO -->
        <section id="promo" class="promo section offset-header">
            <div class="container text-center">
                <h2 class="title">Siht<span class="highlight"> Framework </span></h2>
                <p class="intro">
                    <?php echo $arrayTextLanguages["HOME_INTRO"][$LANGUAGE] ?>
                </p>
                <div class="btns">
                    <a class="btn btn-cta-secondary scrollto" href="#docs" target="_blank"><?php echo $arrayTextLanguages["HOME_BUTTONS"]["BUTTON1"][$LANGUAGE] ?></a>
                    <a class="btn btn-cta-primary scrollto" href="#docs" target="_blank"><?php echo $arrayTextLanguages["HOME_BUTTONS"]["BUTTON2"][$LANGUAGE] ?></a>
                </div>
                <ul class="meta list-inline">
                    <li><a href="https://github.com/luizdeangeli/Siht" target="_blank"><?php echo $arrayTextLanguages["HOME_LINKS"]["GITHUB"][$LANGUAGE] ?></a></li>
                    <li><a href="https://packagist.org/packages/siht/siht" target="_blank"><?php echo $arrayTextLanguages["HOME_LINKS"]["COMPOSER"][$LANGUAGE] ?></a></li>
<!--                    <li><a href="https://github.com/twbs/bootstrap" target="_blank"><?php echo $arrayTextLanguages["HOME_LINKS"]["DOCUMENTATION"][$LANGUAGE] ?></a></li>-->
                    <li><?php echo $arrayTextLanguages["HOME_LINKS"]["CREATED"][$LANGUAGE] ?><a href="http://luizdeangeli.com.br" target="_blank">Luiz Henrique de Angeli</a></li>
                </ul><!--//meta-->
            </div><!--//container-->
            <div class="social-media">
                <div class="social-media-inner container text-center">
                    <ul class="list-inline">
                        <!--                    <li class="twitter-follow"><a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                            </li>//twitter-follow
                                            <li class="twitter-tweet">
                                                <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                            </li>//twitter-tweet
                                            <li class="facebook-like">
                                                 <div class="fb-like" data-href="http://themes.3rdwavemedia.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                            </li>//facebook-like-->
                        <!--// Generate github buttons: https://github.com/mdo/github-buttons -->
                        <li class="github-star"><iframe src="http://ghbtns.com/github-btn.html?user=luizdeangeli&repo=Siht&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe></li>
                        <li class="github-fork"><iframe src="http://ghbtns.com/github-btn.html?user=luizdeangeli&repo=Siht&type=fork" allowtransparency="true" frameborder="0" scrolling="0" width="53" height="20"></iframe></li>
                        <li class="github-follow"><iframe src="http://ghbtns.com/github-btn.html?user=luizdeangeli&type=follow&count=true"
                                                          allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe></li>

                    </ul>
                </div>
            </div>
        </section><!--//promo-->

        <!-- ABOUT --> 
        <section id="about" class="about section">
            <div class="container">
                <h2 class="title text-center">O que é o Siht Framework?</h2>
                <p class="intro text-center">
                    Siht é um pequeno framework desenvolvido com objetivo de criar a camada de interceptação e manipulação do contéudo da requisição. De forma a separar a criação de objetos modelo, validações, persistência. 
                    O Siht framework utiliza o Slim Framework para a camada de RESTful.
                </p>
                <h3 class="title text-center">Como funciona?</h3>
                <p class="intro text-left">
                    1. O Slim recebe a requisição e cria uma instância do Controller da classe e o método desejado.
                    <br>2. O Controller da classe recebe a chamada do método e tenta executar o método com o mesmo nome e parametro nas classes Factory, HandleIn, Repository e HandleOut nesta sequência.

                    <br><br>- As classes e métodos Factory, HandleIn, Repository e HandleOut são opcionais.
                    <br>- Qualquer uma destas classes pode retornar uma informação para o solicitante.
                </p>
                <div class="row">
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">Controller <small>[obrigatório]</small></h3>
                            <p>
                                Identificar o método solicitado, interceptar e direcionar para a demais classes. Nesta classe não será realizada nenhuma programação.
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">Factory <small>[opcional]</small> </h3>
                            <p>
                                Criar objetos que sejam enviados em formato JSON, XML ou outros para Objetos PHP.                                
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">HandleIn <small>[opcional]</small> </h3>
                            <p>
                                Validar as informações enviadas antes de enviar para o Repository, pode-se gerar um Exception neste momento e parar a requisição.
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->           
                    <div class="clearfix visible-md"></div>    
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">Repository <small>[opcional]</small></h3>
                            <p>
                                Criar, Editar, Recuperar, Excluir ou Listar informações do banco de dados.
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->                
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">HandleOut <small>[opcional]</small></h3>
                            <p>
                                Validar as informações retornadas do Repository, pode-se gera um Exception neste momento.
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item col-md-4 col-sm-6 col-xs-12">
                        <div class="icon-holder">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-title">Model <small>[opcional]</small></h3>
                            <p>
                                Permitir criar objetos a partir de um classe modelo criada pelo desenvolvedor
                            </p>
                        </div><!--//content-->
                    </div><!--//item-->               
                </div><!--//row-->            
            </div><!--//container-->
        </section><!--//about-->

        <!-- FEATURES --> 
<!--        <section id="features" class="features section">
            <div class="container text-center">
                <h2 class="title">Features</h2>
                <ul class="feature-list list-unstyled">
                    <li><i class="fa fa-check"></i> Fully responsive</li>
                    <li><i class="fa fa-check"></i> HTML5 + CSS3</li>
                    <li><i class="fa fa-check"></i> Built on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3</a></li>
                    <li><i class="fa fa-check"></i> 400+ FontAwesome icons</li>
                    <li><i class="fa fa-check"></i> 4 colour schemes</li>
                    <li><i class="fa fa-check"></i> LESS files included</li>
                    <li><i class="fa fa-check"></i> Compatible with all modern browsers</li>
                </ul>
            </div>
        </section>-->

        <!-- DOCS --> 
        <section id="docs" class="docs section">
            <div class="container">
                <div class="docs-inner">
                    <h2 class="title text-center"><?php echo $arrayTextLanguages["GET_STARTED"]["TITLE"][$LANGUAGE] ?></h2>    

                    <div class="block">
                        <h3 class="sub-title text-center"><?php echo $arrayTextLanguages["GET_STARTED"]["INSTALL"]["TITLE"][$LANGUAGE] ?></h3>

                        <p><?php echo $arrayTextLanguages["GET_STARTED"]["INSTALL"]["TEXT1"][$LANGUAGE] ?></p>
                        <p><a href="#" target="_blank"><?php echo $arrayTextLanguages["GET_STARTED"]["INSTALL"]["TEXT2"][$LANGUAGE] ?></a></p>

                        <ul class="list-unstyled">
                            <li><strong>composer.json</strong></li>
                        </ul>
                        <div class="code-block">
                            <pre><code class="language-markup">    {
        "require": {
            "siht/siht": "1.x"
        }    
    }
</code></pre>
                        </div><!--//code-block-->
                    </div><!--//block-->


                    <div class="block">
                        <h3 class="sub-title text-center">Hierarquia de Diretórios</h3>
                        <div class="code-block">
                            <pre><code class="language-markup">
    \vendor\
    \Application\    
        \City\
            \Controller.php
            \Factory.php
            \HandleIn.php
            \Repository.php
            \HandleOut.php    
            \City.php
        \autoload.php
    index.php
    .htaccess
                     </code></pre>
                        </div><!--//code-block-->
                    </div><!--//block-->

                    <div class="block">
                        <h3 class="sub-title text-center">Conteúdo dos arquivos</h3>

                        <?php
                        foreach ($arrayCode as $file => $code) {
                            ?>
                            <br>
                            <ul class="list-unstyled">
                                <li><strong><?php echo $file ?> </strong></li>
                            </ul>
                            </ul>
                            <div class="code-block">
                                <pre><code class="language-javascript"><?php echo $code ?></code></pre>
                                    </div><!--//code-block-->
                        <?php }
                        ?>


                    </div><!--//block-->


                     
                    <div class="block">
                        <h3 class="sub-title text-center">Full Documentation</h3>
                        <p class="text-center">Acesse agora e veja a documentação completada do Siht Framework no GitHub e todas as versões disponíveis.</p>
                        <p class="text-center">
                            <a class="btn btn-cta-primary" href="https://github.com/sihtphp/Siht" target="_blank">More on GitHub</a>
                        </p>
                    </div><!--//block-->

                </div><!--//docs-inner-->         
            </div><!--//container-->
        </section><!--//features-->


        <!-- CONTACT --> 
        <section id="contact" class="contact section has-pattern">
            <div class="container">
                <div class="contact-inner">
                    <h2 class="title  text-center">Contact</h2>
                    <p class="intro  text-center">
<!--                        I hope you find this Bootstrap template useful. 
                        <br />
                        Feel free to get in touch if you have any questions or suggestions.-->
                        Eu espero que você tenha encontrado o que precisava neste pequeno framework.
                        <br />    
                        Sinta-se livre para entrar em contato se você tiver dúvidas ou sugestões.
                    </p>
                    <div class="author-message">                      
                        <div class="profile">
                            <img class="img-responsive" src="assets/images/profile.png" alt="" />
                        </div><!--//profile-->
                        <div class="speech-bubble">
                            <h3 class="sub-title">Quem sou eu?</h3>
                            <p>Possuo graduação em Tecnologia em Processamento de Dados pelo Centro Universitário Cesumar(2006) e especialização em Desenvolvimento Orientados a Objetos em Java também pelo Centro Universitário Cesumar(2009), 
                            
                            <p> Atualmente sou Professor de Graduação/Pós-graduação e Coordenador de Sistemas do Centro Universitário Cesumar em <strong>Maringá-Paraná-Brasil</strong></p> 
                            <div class="source">
                                <span class="name"><a href="https://twitter.com/luizdeangeli" target="_blank">Luiz Henrique de Angeli</a></span>
                                <br />
                                <span class="title">Desenvolvedor PHP</span>
                            </div><!--//source-->
                        </div><!--//speech-bubble-->                        
                    </div><!--//author-message-->
                    <div class="clearfix"></div>
                    <div class="info text-center">
                        <h4 class="sub-title"><?php echo $arrayTextLanguages["CONTACT_GET_CONNECTED"][$LANGUAGE] ?></h4>
                        <ul class="social-icons list-inline">
                            <li><a href="https://twitter.com/luizdeangeli" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/luizdeangeli" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/pub/luiz-henrique-de-angeli/58/71b/426"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://instagram.com/luizdeangeli"><i class="fa fa-instagram"></i></a></li>  
<!--                            <li><a href="https://dribbble.com/Xiaoying"><i class="fa fa-dribbble"></i></a></li>   -->
                            <li class="last"><a href="mailto: luizdeangeli@gmail.com"><i class="fa fa-envelope"></i></a></li>              
                        </ul>
                    </div><!--//info-->
                </div><!--//contact-inner-->
            </div><!--//container-->
        </section><!--//contact-->  

        <!-- FOOTER --> 
        <footer class="footer">
            <div class="container text-center">
                <small class="copyright">Sith Framework - 2015</small>
            </div><!--//container-->
        </footer><!--//footer-->

        <!-- Javascript -->          
        <script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>    
        <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>   
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script> 
        <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
        <script type="text/javascript" src="assets/js/min/main-min.js"></script>       
    </body>
</html> 

