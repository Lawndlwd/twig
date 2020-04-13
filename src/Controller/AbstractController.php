<?php
 namespace App\Controller;

 use Twig\Environment;
 use Twig\Extension\DebugExtension;
 use Twig\Loader\FilesystemLoader;



 abstract  class AbstractController
 {
     protected $twig;

     public function __construct()
     {
         $loader = new FilesystemLoader(__DIR__ .'/../src/View/');
         $this->twig = new Environment($loader,[]);
         $this->twig->addExtension(new DebugExtension());
     }
 }