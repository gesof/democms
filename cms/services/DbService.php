<?php
/**
 * @project: democms
 * @author: alexjorj
 * Date: 4/28/21
 * Time: 3:13 PM
 */

class DbService
{
    private $config;
    /**
     * @var mysqli
     */
    private $conn;

    /**
     * DbService constructor.
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function connect()
    {
        if($this->conn == null) {
            // Create connection
            $this->conn = new mysqli( 'localhost', $this->config['username'], $this->config['password'] );

            // Check connection
            if ( $this->conn->connect_error ) {
                die( "Connection failed: " . $this->conn->connect_error );
            }
            $this->conn->select_db( $this->config['database'] );
        }
    }

    public function install()
    {
        $this->connect();
        $sql = "CREATE TABLE page (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(30) NOT NULL,
            slug VARCHAR(30) NOT NULL,
            content text )";

        if ($this->conn->query($sql) !== TRUE) {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function readPage($name)
    {

    }

    public function savePage($name, $content)
    {

    }
}
