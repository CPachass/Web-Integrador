<?php 
define('TEMPLATES_URL', __DIR__ . "/templates/");

function incluirTemplate(String $nombreTemplate) : void 
{
    include TEMPLATES_URL . "$nombreTemplate.php";
}

function debug($obj) : void {
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";
    exit;
}

function esAdmin(): void
{
    session_start();
    if (!$_SESSION["admin"]) {
        header("Location: " . $GLOBALS['raiz_sitio']);
    }
}


function estaAutenticado(): void
{
    session_start();
    if (!$_SESSION["login"]) {
        header("Location: /");
    }
}
?>