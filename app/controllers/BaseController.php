<?php
namespace App\Controllers;

use Jenssegers\Blade\Blade;

class BaseController
{
    protected function view($view, $data = [])
    {
        $blade = new Blade('./app/views', 'storage');
        echo $blade->make($view, $data)->render();
    }
}