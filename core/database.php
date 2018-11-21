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



