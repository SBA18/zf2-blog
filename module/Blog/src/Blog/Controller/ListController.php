<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 // Filename: /module/Blog/src/Blog/Controller/ListController.php
 namespace Blog\Controller;

 use Blog\Service\PostServiceInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class ListController extends AbstractActionController
 {
     /**
      * @var \Blog\Service\PostServiceInterface
      */
     protected $postService;

     public function __construct(PostServiceInterface $postService)
     {
         $this->postService = $postService;
     }

     public function indexAction()
     {
         return new ViewModel(array(
             'posts' => $this->postService->findAllPosts()
         ));
     }
 }