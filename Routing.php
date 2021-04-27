<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/27/21
 * Time: 2:26 PM
 */

class Routing
{
    private $routing = array(
        '/' => ["cms\controllers\Main", "index"],
        '/aboutus' => ["cms\controllers\Main", "aboutus"],
        '/contact' => ["cms\controllers\Main", "contact"],
    );

    public function match()
    {
        if(isset($this->routing[$_SERVER['REQUEST_URI']])) {
            return $this->routing[$_SERVER['REQUEST_URI']];
        }else {
            return null;
        }
    }
}
