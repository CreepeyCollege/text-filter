<?php
Class Delete extends Connect {
    private $table;
    private $column;
    private $value;

    public function __construct(String $table, String $column, String $value) {
        $this->executeConnection();
        $this->table = $table;
        $this->column = $column;
        $this->value = $value;
    }

    public function executeDelete() {
        $query = "DELETE FROM {$this->table} WHERE {$this->table}.{$this->column} = '{$this->value}'";
        $result = $this->connection->query($query);
        return $result;
    }
}