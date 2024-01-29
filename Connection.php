<?php

declare(strict_types=1);

class Connection extends mysqli {
    public function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $server = "127.0.0.1";
        $database = "app_db";
        $username = "db_user";
        $password = "db_user_pass";
        $port = 6033;
        parent::__construct($server, $username, $password, $database, $port);
        $this->set_charset('utf8mb4');
    }
}
