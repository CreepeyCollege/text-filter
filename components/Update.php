<?php
Class Update extends Connect {
    private $table;
    private $column;
    private $value;
    private $oldValue;

    public function __construct(String $table, String $column, String $oldValue, String $value) {
        $this->executeConnection();
        $this->table = $table;
        $this->column = $column;
        $this->value = $value;
        $this->oldValue = $oldValue;
    }

    public function executeUpdate() {
        $query = "UPDATE {$this->table} SET {$this->column} = '{$this->value}' WHERE {$this->table}.{$this->column} = '{$this->oldValue}'";
        $result = $this->connection->query($query);
        return $result;
    }
}