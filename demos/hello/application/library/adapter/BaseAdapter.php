<?php


namespace adapter;
/**
 * Class BaseAdapter
 * @package adapter
 */

class BaseAdapter
{
    public $name;

    public function  __construct($name)
    {
        $this->name = $name;
    }

}