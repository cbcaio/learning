<?php

namespace App;

interface PrototypeInterface
{
    const PROTO = "IPrototype";

    public function __clone();
}
