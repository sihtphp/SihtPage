<?php

/* $arrayTextLanguages = array(
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
  "ABOUT" => array(
  "ABOUT_TITLE" => array(
  "br" => "O que é o Siht Framework?",
  "en" => "What is the Siht Framework?"
  ),
  "ABOUT_TEXT" => array(
  "br" => "Siht é um pequeno framework desenvolvido com objetivo de criar a camada de interceptação e manipulação do contéudo da requisição. De forma a separar a criação de objetos modelo, validações, persistência. O Siht framework utiliza o Slim Framework para a camada de RESTful.",
  "en" => "Siht is a small framework developed in order to create the trapping layer and manipulating the content of the request. To separate the creation of model objects, validations, persistence. The Siht framework uses the Slim Framework for RESTful layer."
  ),
  "WORK_TITLE" => array(
  "br" => "Como funciona?",
  "en" => "How it works?"
  ),
  "WORK_TEXT" => array(
  array(
  "br" => "1. O Slim recebe a requisição e cria uma instância do Controller da classe e o método desejado. ",
  "en" => "1. The Slim receives the request and creates an instance of the Controller class and the desired method."
  ),
  array(
  "br" => "2. O Controller da classe recebe a chamada do método e tenta executar o método com o mesmo nome e parametro nas classes Factory, HandleIn, Repository e HandleOut nesta sequência. ",
  "en" => "2. The Controller class receives the method call and try to run the method with the same name and parameter in the Factory classes, HandleIn, Repository and HandleOut this result."
  ),
  array(
  "br" => "- As classes e métodos Factory, HandleIn, Repository e HandleOut são opcionais. ",
  "en" => "- The classes and methods Factory, Handle In, Out Handle Repository y are optional."
  ),
  array(
  "br" => "- Qualquer uma destas classes pode retornar uma informação para o solicitante.",
  "en" => "- Any of these classes can return an information to the requestor."
  ),
  ),
  "WORK_CONTROLLER" => array(
  "br" => "Identificar o método solicitado, interceptar e direcionar para a demais classes. Nesta classe não será realizada nenhuma programação.",
  "en" => "Identify the requested method, intercept and drive to the other classes. In this class no programming is not performed."
  ),
  "WORK_FACTORY" => array(
  "br" => "Criar objetos que sejam enviados em formato JSON, XML ou outros para Objetos PHP.",
  "en" => "Create objects that are sent in JSON, XML or others to PHP objects."
  ),
  "WORK_HANDLE_IN" => array(
  "br" => "Validar as informações enviadas antes de enviar para o Repository, pode-se gerar um Exception neste momento e parar a requisição.",
  "en" => "Validate the information sent before sending to the repository, we can generate an Exception right now and stop the request."
  ),
  "WORK_REPOSITORY" => array(
  "br" => "Criar, Editar, Recuperar, Excluir ou Listar informações do banco de dados.",
  "en" => "Create, Edit, Retrieve, Delete List and database information."
  ),
  "WORK_HANDLE_OUT" => array(
  "br" => "Validar as informações retornadas do Repository, pode-se gera um Exception neste momento.",
  "en" => "Validate the information returned from the repository, we can generate an Exception this time."
  ),
  "WORK_MODEL" => array(
  "br" => "Permitir criar objetos a partir de um classe modelo criada pelo desenvolvedor",
  "en" => "Allow creating objects from a model class created by the developer"
  ),
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
 */
$uri = isset($_GET["uri"]) ? $_GET["uri"] : false;
$uri = explode("/", $uri);

$LANGUAGE = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : "en";
$LANGUAGE = in_array($LANGUAGE, array("br", "en")) ? $LANGUAGE : "en";

include_once "./lang/{$LANGUAGE}.php";
