<?php

Class Connect extends Config {
    public $connection;

    public function __construct() {
        $this->executeConnect();
    }

    public function executeConnect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    }
}