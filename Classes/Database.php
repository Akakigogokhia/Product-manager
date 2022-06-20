<?php

namespace Classes;

use mysqli;

include "db.php";


class Database
{
    public function __construct()
    {
        $conn = new mysqli(host, user, password, dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $this->conn = $conn;
    }
}
