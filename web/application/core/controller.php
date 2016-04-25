<?php
/**
 * Created by PhpStorm.
 * User: Nikonenko
 * Date: 21.04.2016
 * Time: 11:43
 */

class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}

?> 