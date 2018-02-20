<?php
class database
{
    private $DB_CON;

    function __construct()
    {
        $this->DB_CON = false;
        $this->connect();
    }

    function __deconstruct()
    {
        $this->disconnect();
    }

    function connect()
    {
        require 'db_config.php';
        if ($this->DB_CON == false)
        {
            try
            {
                $this->DB_CON = new PDO(
                $DB_DSN,
                $DB_USER,
                $DB_PASSWORD,
                $DB_OPT
                );
            }
            if ($this->DB_CON == false)
            {
                echo "Connection to DB failed";
                http_response_code(500);
                die();
            }
            $this->DB_CON = true;
        }
    }

    function disconnect()
    {
        if ($this->DB_CON == true)
            $this->DB_CON = false;
    }
}
?>
