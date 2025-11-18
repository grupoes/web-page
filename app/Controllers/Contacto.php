<?php

namespace App\Controllers;

use App\Models\ContactoModel;

class Contacto extends BaseController
{
    public function index(): string
    {
        return view('admin/contacto/index');
    }

    public function render()
    {
        $contacto = new ContactoModel();

        $data = $contacto->orderBy('id', 'desc')->findAll();

        return $this->response->setJSON($data);
    }
}
