<?php

class PasswordReminder {

    private $dbConnection;

    /*
     * Why should PasswordReminder have any interest in what our database connection is? This class
     * doesn't need to have the knowledge of how to connect to our database
     */
    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}