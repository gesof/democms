<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/27/21
 * Time: 2:18 PM
 */

namespace cms\controllers;


class Main
{

    public function index()
    {
        include __DIR__ . "/../templates/index.html";
    }

    public function aboutus()
    {
        echo "aboutus";
    }

    public function contact()
    {
        echo "contact";
    }
}
