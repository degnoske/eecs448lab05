<?php

class db {

    private $hostname = 'mysql.eecs.ku.edu';
    private $username = 'degnoske';
    private $password = 'abc';
    private $database = 'degnoske';

    public $mysqli = null;

    public function db() {
    }

    public function connect() {
        $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        /* check connection */
        if ($this->mysqli->connect_errno) {
            printf("Connect failed: %s\n", $this->mysqli->connect_error);
            exit();
        }
    }

    public function close() {
        $this->mysqli->close();
    }


    public function query($query){
        $this->mysqli->query($query);
    }



}
