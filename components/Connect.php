<?php
Class Connect extends Config {
    public $connection;

    public function executeConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    }
}