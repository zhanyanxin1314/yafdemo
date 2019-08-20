<?php

namespace service;
/**
 * Class BaseService
 * @package service
 */
class BaseService
{
    /**
     * @var string
     */
    public $db;

    /**
     * BaseService constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }
}