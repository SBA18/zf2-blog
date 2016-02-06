<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 // Filename: /module/Blog/src/Blog/Factory/ListControllerFactory.php
 namespace Blog\Factory;

 use Blog\Controller\ListController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class ListControllerFactory implements FactoryInterface
 {
     /**
      * Create service
      *
      * @param ServiceLocatorInterface $serviceLocator
      *
      * @return mixed
      */
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $postService        = $realServiceLocator->get('Blog\Service\PostServiceInterface');

         return new ListController($postService);
     }
 }