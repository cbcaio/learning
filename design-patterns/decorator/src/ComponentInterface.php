<?php

namespace App;

abstract class ComponentInterface
{
    protected $site;

    abstract public function getSite();

    abstract public function getPrice();
}
