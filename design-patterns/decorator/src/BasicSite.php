<?php

namespace App;

class BasicSite extends ComponentInterface
{
    public function __construct()
    {
        $this->site = "Basic Site";
    }

    public function getSite()
    {
        return $this->site;
    }

    public function getPrice()
    {
        return 1200;
    }
}
