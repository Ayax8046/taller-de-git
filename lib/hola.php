<?php
// Autor: David Elena Heredia - davidemari2001@gmail.com
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
