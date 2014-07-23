<?php namespace CVE\Clearview;

use Illuminate\Support\Facades\Facade;

class ClearviewFacade extends Facade {

    protected static function getFacadeAccessor() { return 'clearview'; }

}