<?php namespace Nimo\Tests;

trait RememberConstructorParamTrait
{
    public function __construct()
    {
        $this->params = func_get_args();
    }
}