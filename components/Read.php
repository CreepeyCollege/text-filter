<?php
Class Read extends Connect {
    private $item;
    private $column;
    private $index;

    public function __construct(String $item, String $column, String $index) {
        $this->executeConnect();
        $this->item = $item;
        $this->column = $column;
        $this->index = $index;
        $this->executeRead();
    }

    public function executeRead() {
        $query = "SELECT $this->item FROM $this->column";
        $result = $this->connection->query($query);
        $outputArray = array();
        while ($row = $result->fetch_assoc()) {
            array_push($outputArray, $row[$this->index]);
        }
        return $outputArray;
    }
}