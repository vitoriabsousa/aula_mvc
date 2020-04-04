<?php
//Arquivos Diretorios raizes
    $pastaInterna="sitenovo/";
    define ('DIRPAGE' , "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

if (substr ($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
    define ('DIRREQ', "http://{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
}else{
    define ('DIRREQ', "http://{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}
define ('DIRIMG' ,DIRPAGE."public/img/");
define ('DIRCSS' ,DIRPAGE."public/css/");
define ('DIRJS' ,DIRPAGE."public/js/");

define ('HOST', "localhost");
define ('DB' , "sistema");
define ('USER', "root");
define ('PASS', "");

?>