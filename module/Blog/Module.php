<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blog;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface,ConfigProviderInterface
{
    /**
      * Return an array for passing to Zend\Loader\AutoloaderFactory.
      *
      * @return array
      */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    // Autoload all classes from namespace 'Blog' from '/module/Blog/src/Blog'
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                )
            )
        );
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
    */
     
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}