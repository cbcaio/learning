<?php

namespace App;

class Database extends Decorator
{
    public function __construct(ComponentInterface $site)
    {
        $this->site = $site;
    }

    public function getSite()
    {
        return $this->site->getSite() . "+Database";
    }

    public function getPrice()
    {
        return $this->site->getPrice() + 666;
    }
}
