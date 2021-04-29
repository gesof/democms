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
        $row = $this->db->readPage('aboutus');
        $title = $row['name'];
        $content = $row['content'];
        $this->render("aboutus.html", array(
            'title' => $title,
            'content' => $content,
        ));

    }

    public function contact()
    {
        $message = '';
        if(isset($_POST['submit'])) {
            $name = $_POST['yourname'];
            $text = $_POST['comments'];
            mail("iordachej@gmail.com", "Contact request", "From: " . $name . "\n\nComments:\n" . $text );
            $message = "Message sent";
        }

        $this->render("contact.html", array(
            'content' => $message
        ));
    }

    public function install()
    {
        $this->db->install();
        $content = $this->db->savePage('aboutus', 'About us', 'This is our team');
        $this->render("install.html", array());
    }

}
