<?php

$uri = isset($_GET["uri"]) ? $_GET["uri"] : false;
$uri = explode("/", $uri);

$LANGUAGE = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : "en";
$LANGUAGE = in_array($LANGUAGE, array("br", "en")) ? $LANGUAGE : "en";

include_once "./lang/{$LANGUAGE}.php";
