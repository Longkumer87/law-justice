<?php

class DatabaseConnect
{
    private string $msg;
    private mixed $connection;
    public function __construct()
    {
        $this->msg = "";
    }
    protected function connect(): bool
    {
        try {
            $dsn = "mysql:host=10.33.228.49:3306;dbname=u515821452_ctsdb;charset=utf8mb4";
            $this->connection = new PDO($dsn, 'u515821452_cts', '202xctS@');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->msg = "yay";
            return true;
        } catch (PDOException $error) {
            $this->msg = "Error : DatabaseConnect 001";
            return false;
        }
        return false;
    }
    protected function get_connection()
    {
        return $this->connection;
    }
    public function get_msg_databaseconnect(): string
    {
        return $this->msg;
    }
}
