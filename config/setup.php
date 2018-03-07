<?php

class database
{
    private $db;

    function __construct()
    {
        require_once 'database.php';

        $this->db = $this->DBConnection();
        $this->createDB();
        $this->createTable();
    }

    function DBConnection()
    {
        require 'database.php';

        try
        {
            $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die('\DB ERROR : ' .$e->getMessage());
        }
        return $dbh;
    }

    function createDB()
    {
        require 'database.php';
        $this->db->exec("CREATE DATABASE IF NOT EXISTS ".$DB_NAME);
    }

    function createTable()
    {
        require 'database.php';

        $this->db->exec("USE ".$DB_NAME);

        $this->db->exec("CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `login` varchar(255) NOT NULL,
            `password` varchar (128) DEFAULT NULL,
            `email` varchar(255) DEFAULT NULL,
            `magic_key` varchar(255) DEFAULT NULL,
            `rights` ENUM('user', 'admin'),
            `status` ENUM('open', 'close')
        )");

        $this->db->exec("CREATE TABLE IF NOT EXISTS `gallery` (
            `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `user_id` varchar(255) NOT NULL,
            `name` varchar(255) NOT NULL,
            `likes` varchar (255) NOT NULL
        )");

        $this->db->exec("CREATE TABLE IF NOT EXISTS `comments` (
            `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `user_id` varchar(255) NOT NULL,
            `comment` varchar(255) NOT NULL,
            `picture` varchar(255) NOT NULL
        )");

        $this->db->exec("CREATE TABLE IF NOT EXISTS `likes` (
            `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `user_id` varchar(255) NOT NULL,
            `picture` varchar(255) NOT NULL
        )");
    }
}

$create = new database();
header("Location: ../index.php");
?>