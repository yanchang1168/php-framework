<?php
namespace App\Controller;

use Jenssegers\Blade\Blade;

class BaseController {
    public function view($tpl, $data = [])
    {
        $blade = new Blade(APP_PATH . '/View', ROOT_PATH . '/storage/cache/view');
        echo $blade->make($tpl, $data);
        exit;
    }
}
