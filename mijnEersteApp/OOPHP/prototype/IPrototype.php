<?php

interface IPrototype
{
    public function __clone();
    public function getSpecs();
}
