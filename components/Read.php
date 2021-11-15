<?php
Class Read extends Connect {
    private $tableItem;
    private $tableColumn;
    private $rowIndex;

    public function __construct(String $tableItem, String $tableColumn, String $rowIndex) {
        $this->executeConnect();
        $this->tableItem = $tableItem;
        $this->tableColumn = $tableColumn;
        $this->rowIndex = $rowIndex;
        $this->executeRead();
    }

    public function executeRead() {
        $query = "SELECT $this->tableItem FROM $this->tableColumn";
        $result = $this->connection->query($query);
        $outputArray = array();
        while ($row = $result->fetch_assoc()) {
            array_push($outputArray, $row[$this->rowIndex]);
        }
        return $outputArray;
    }
}