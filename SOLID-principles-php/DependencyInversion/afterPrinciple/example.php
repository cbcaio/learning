<?php

interface ConnectionInterface { // creating abstraction
    public function connect();
}

class DbConnection implements ConnectionInterface { // now the low level module depends on the abstraction too

    public function connect()
    {
        // TODO: Implement connect() method.
    }
}

class PasswordReminder {

    private $dbConnection;

    /*
     * High level module depending on the abstraction and not the concretion
     */
    public function __construct(ConnectionInterface  $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}