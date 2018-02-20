<?php
require("db_config/db_class.php");

$db = new database();

function userLogged()
{
    session_start();
    if (isset($_SESSION["logged"]) && $_SESSION["logged"] != '')
        return true;
    return false;
}
?>
