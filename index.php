<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/27/21
 * Time: 2:09 PM
 * https://github.com/gesof/democms.git
 *
php -S localhost:8000
 */
//print_r($_SERVER['REQUEST_URI']);

require_once 'cms/controllers/Main.php';
require_once 'Routing.php';

$router  = new Routing();
$matched = $router->match();

if($matched) {
    $className = $matched[0];
    $method    = $matched[1];

    $obj = new $className;
    $obj->$method();
}else {
    echo "Page not found";
}
