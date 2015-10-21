<?php

$arrayTextLanguages = array(
    "HOME_MENU" => array(
        "HOME" => array(
            "br" => "Home",
            "en" => "Home"
        ),
        "ABOUT" => array(
            "br" => "Sobre",
            "en" => "About"
        ),
        "CONTACT" => array(
            "br" => "Contato",
            "en" => "Contact"
        )
    ),
    "HOME_INTRO" => array(
        "br" => "Pequeno Framework gratuito criado para interceptar e manipular requisições RESTful utilizando o Slim",
        "en" => "It is small free framework create to intercept and manipulate RESTful requests using the Slim."
    ),
    "HOME_BUTTONS" => array(
        "BUTTON1" => array(
            "br" => "Instalar",
            "en" => "Install"
        ),
        "BUTTON2" => array(
            "br" => "Comece já",
            "en" => "Get Started"
        ),
    ),
    "HOME_LINKS" => array(
        "GITHUB" => array(
            "br" => "Veja no GitHub",
            "en" => "View on GitHub"
        ),
        "COMPOSER" => array(
            "br" => "Veja no Composer",
            "en" => "View on Composer"
        ),
        "DOCUMENTATION" => array(
            "br" => "Veja a documentação",
            "en" => "View full documentation"
        ),
        "CREATED" => array(
            "br" => "Criado por:",
            "en" => "Created By:"
        )
    ),
    "GET_STARTED" => array(
        "TITLE" => array(
            "br" => "Iniciando",
            "en" => "Get Started"
        ),
        "INSTALL" => array(
            "TITLE" => array(
                "br" => "Instalar",
                "en" => "Install"
            ),
            "TEXT1" => array(
                "br" => "Recomendamos que você faça a instalação do Siht Framework utilizando o Composer.",
                "en" => "Recomendamos que você faça a instalação do Siht Framework utilizando o Composer."
            ),
            "TEXT2" => array(
                "br" => "Visite o Siht Framework no Composer",
                "en" => "Visite o Siht Framework no Composer"
            ),
        ),
        "TUTORIAL" => array(
            "TITLE" => array(
                "br" => "Tutorial para um CRUD de Cidade",
                "en" => "Tutorial para um CRUD de Cidade",
            ),
            "TEXT1" => array(
                "br" => "",
                "en" => ""
            ),
        ),
    ),
    "CONTACT_GET_CONNECTED" => array(
        "br" => "Fique conectado",
        "en" => "Get Connected"
    ),
);

$uri = isset($_GET["uri"]) ? $_GET["uri"] : false;
$uri = explode("/", $uri);

$LANGUAGE = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : "en";
$LANGUAGE = in_array($LANGUAGE, array("br", "en")) ? $LANGUAGE : "en";