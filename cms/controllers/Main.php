<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/27/21
 * Time: 2:18 PM
 */

namespace cms\controllers;


class Main extends ParentController
{

    public function index()
    {
        $content = "hello world";
        $this->render("index.html", array(
            'content' => $content
        ));
    }

    public function aboutus()
    {
        $title = "About us";
        $content = "This is my content";
        $this->render("aboutus.html", array(
            'title' => $title,
            'content' => $content,
        ));

    }

    public function contact()
    {
        $content = "hello world";
        $this->render("contact.html", array(
            'content' => $content
        ));
    }

    public function install()
    {
        $this->db->install();
        $this->render("install.html", array());
    }

}
