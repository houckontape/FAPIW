<?php

namespace Database;

use PDO;
use PDOException;

class Connect
{
    protected $pdo;

    public function _construct ($dsn, $user, $password)
    {
        $this->pdo = new PDO($dsn, $user, $password);
    }

    public function getPdo(){
        return $this->pdo;
    }
}