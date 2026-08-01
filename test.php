<?php

require_once("autoload.php");
session_start();

class Test extends DatabaseConnect
{
    private mixed $dbconn;
    public function __construct(DatabaseConnect $db)
    {
        $this->dbconn = $db;
    }
    public function verify()
    {
        if ($this->dbconn->connect() == false) {
            return 0;
        } else {
            return 1;
        }
    }
}

$test = new Test(new DatabaseConnect);
echo $test->verify();
