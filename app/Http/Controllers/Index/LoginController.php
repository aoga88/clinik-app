<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index() {
        return view('login');
    }

}
