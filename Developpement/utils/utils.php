<?php 

function render($path, $template = false)
{
    if ($template) {
        require "templates/$path.php"; // chemin sans concaténation
    }else {
        require 'views/' . $path . '.php'; // chemin avec concaténation 
    }

};