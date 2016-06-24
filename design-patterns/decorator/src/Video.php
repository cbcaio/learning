<?php

namespace App;

class Video extends Decorator
{
    public function __construct(ComponentInterface $site)
    {
        $this->site = $site;
    }

    public function getSite()
    {
        return $this->site->getSite() . "+Video";
    }

    public function getPrice()
    {
        return $this->site->getPrice() + 350;
    }
}
