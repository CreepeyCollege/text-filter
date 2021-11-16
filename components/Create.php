<?php
Class Create extends Connect {
    private $table;
    private $column;
    private $value;

    public function __construct(String $table, String $column, String $value) {
        $this->executeConnection();
        $this->table = $table;
        $this->column = $column;
        $this->value = $value;
    }

    public function executeCreate() {
        $query = "INSERT INTO {$this->table} (id, {$this->column}) VALUES (NULL, '{$this->value}')";
        $result = $this->connection->query($query);
        return $result;
    }
}