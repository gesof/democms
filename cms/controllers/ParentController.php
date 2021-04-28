<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/28/21
 * Time: 3:00 PM
 */

namespace cms\controllers;


class ParentController
{

    /**
     * @var string
     */
    private $template;
    /**
     * @var array
     */
    private $parameters;
    /** @var \DbService */
    protected $db;

    /**
     * ParentController constructor.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }


    protected function render( string $template, array $parameters )
    {
        $this->template = $template;
        $this->parameters = $parameters;
    }

    public function __destruct()
    {
        foreach ($this->parameters as $key => $parameter) {
            $$key = $parameter;
        }
        include __DIR__ . "/../templates/" . $this->template;
    }
}
