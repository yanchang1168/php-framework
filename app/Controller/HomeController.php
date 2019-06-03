<?php
namespace App\Controller;

use Framework\Conf;
use Framework\Log;
use Model\User;

class HomeController extends BaseController {
    public function index()
    {
        Log::error("heoo");
        $user = new User();
        $user->getUser();
        $this->view('home');
    }
}
