<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Filename: /module/Blog/src/Blog/Model/PostInterface.php
namespace Blog\Model;

interface PostInterface
{
    /**
     * Will return the ID of the blog post
     *
     * @return int
     */
    public function getId();

    /**
     * Will return the TITLE of the blog post
     *
     * @return string
     */
    public function getTitle();

    /**
     * Will return the TEXT of the blog post
     *
     * @return string
     */
    public function getText();
}