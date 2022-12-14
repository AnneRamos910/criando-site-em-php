<?php

class PostController

{
    public function index($params)
    {

        try {
            $postagem = Postagem::selecionaPorId($params);
            

            $loader = new \Twig\loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('single.html');
           
            $parametros = array();
            $parametros['titulo'] = $postagem->titulo;
            $parametros['conteudo'] = $postagem->conteudo;
            $parametros['comentarios'] = $postagem->comentarios;
            //var_dump($colecPostagens);

            $conteudo = $template->render($parametros);
            echo $conteudo;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
