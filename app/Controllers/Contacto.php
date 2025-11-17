<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function login(): string
    {
        return view('admin/contacto/index');
    }
}
