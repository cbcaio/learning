<?php

namespace App;

class Client
{
    public $basicSite;

    public function __construct()
    {
        $this->basicSite = new BasicSite();
    }

    public function wrapComponentDatabase()
    {
        $this->basicSite = new Database($this->basicSite);

        return $this->basicSite;
    }

    public function wrapComponentVideo()
    {
        $this->basicSite = new Video($this->basicSite);

        return $this->basicSite;
    }
}
