<?php

/*
https://www.youtube.com/watch?v=3APJu3DjbHQ&list=PLrSOXFDHBtfFuZttC17M-jNpKnzUL5Adc&index=26&ab_channel=FormationVid%C3%A9o


        Classe abstraite : classe qui ne s'instancie pas
                            Factoriser du code


        Interface        :  API
                            Fournit un "contrat de services"
                            
                            
*/

interface IArticle
{   
    public function getNbComments();
    public function create();
    public function save($author,$content);
    public function delete();
}

class BlogArticle implements IArticle
{

    public function getNbComments()
    {
       return 15;
    }

    public function create()
    {
        echo'create()';
    }
    
    public function save($author,$content);
    {
       echo $content;
    }
    public function delete ();
    {
       echo 'suppression';
    }
}

$test = new BlogArticle();
$test->create();