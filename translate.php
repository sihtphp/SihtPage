<?php

$arrayTextLanguages = array(
    "HOME_MENU" => array(
        "HOME" => array(
            "BR" => "Home",
            "EN" => "Home"
        ),
        "ABOUT" => array(
            "BR" => "Sobre",
            "EN" => "About"
        ),
        "CONTACT" => array(
            "BR" => "Contato",
            "EN" => "Contact"
        )
    ),
    "HOME_INTRO" => array(
        "BR" => "Pequeno Framework gratuito criado para interceptar e manipular requisições RESTful utilizando o Slim",
        "EN" => "It is small free framework create to intercept and manipulate RESTful requests using the Slim."
    ),
    "HOME_BUTTONS" => array(
        "BUTTON1" => array(
            "BR" => "Instalar",
            "EN" => "Install"
        ),
        "BUTTON2" => array(
            "BR" => "Comece já",
            "EN" => "Get Started"
        ),
    ),
    "HOME_LINKS" => array(
        "GITHUB" => array(
            "BR" => "Veja no GitHub",
            "EN" => "View on GitHub"
        ),
        "COMPOSER" => array(
            "BR" => "Veja no Composer",
            "EN" => "View on Composer"
        ),
        "DOCUMENTATION" => array(
            "BR" => "Veja a documentação",
            "EN" => "View full documentation"
        ),
        "CREATED" => array(
            "BR" => "Criado por:",
            "EN" => "Created By:"
        )
    ),
    "GET_STARTED" => array(
        "TITLE" => array(
            "BR" => "Iniciando",
            "EN" => "Get Started"
        ),
        "INSTALL" => array(
            "TITLE"=>array(
                "BR" => "Instalar",
                "EN" => "Install"
            ),
            "TEXT1"=>array(
                "BR" => "Recomendamos que você faça a instalação do Siht Framework utilizando o Composer.",
                "EN" => "Recomendamos que você faça a instalação do Siht Framework utilizando o Composer."
            ),
            "TEXT2"=>array(
                "BR" => "Visite o Siht Framework no Composer",
                "EN" => "Visite o Siht Framework no Composer"
            ),
        ),
        "TUTORIAL" => array(
            "TITLE"=>array(
                "BR" => "Tutorial para um CRUD de Cidade",
                "EN" => "Tutorial para um CRUD de Cidade",
            ),
            "TEXT1"=>array(
                "BR" => "",
                "EN" => ""
            ),
        ),
    ),
    "CONTACT_GET_CONNECTED" => array(
        "BR" => "Fique conectado",
        "EN" => "Get Connected"
    ),
);

$LANGUAGE = isset($_GET["l"]) && !empty($_GET["l"]) ? $_GET["l"] : "EN";
?>