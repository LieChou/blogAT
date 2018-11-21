<?php

class Manager
//class Database à instancier
{
    protected function dbConnect()
    {
        $db= new PDO('mysql:host=localhost;dbname=blogAT;charset=utf8','root','root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}

//class Manager {private $db_host;private $db_name;private $db_user;private $db_password;
// public function __construct($db_host='localhost', $db_name, $db_user='', $db_password=''){$this->db_host=$db_host;$this->db_name=$db_name;$this->db_user=$db_user;$this->db_password=$db_password;}



