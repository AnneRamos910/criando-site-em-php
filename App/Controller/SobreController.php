<?php

class SobreController
{
    public function index()
    {
        $loader = new \Twig\loader\FilesystemLoader('App/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('sobre.html');

        $parametros = array();


        $conteudo = $template->render($parametros);
        echo $conteudo;
    }
}
