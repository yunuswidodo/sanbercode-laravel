<?php

require_once 'ape.php';
require_once 'frog.php';
class Animal
{
    public $name;
    public $legs;
    public $cold_bloded;

    public function __construct($name, $legs, $cold_bloded)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_bloded = $cold_bloded;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_could_blooded()
    {
        return $this->cold_bloded;
    }
}
