<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function login()
    {
        if (session()->loggin) {
            return redirect()->to(base_url('panel'));
        }

        return view('admin/login');
    }

    public function acceso()
    {
        $user = new UserModel();

        try {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $usuario = $user->where('usuario', $username)->where('password', $password)->where('estado', 1)->first();

            if (!$usuario) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Usuario o contraseña incorrectos'
                ]);
            }

            $session = session();
            $session->set('usuario', $username);
            $session->set('nombres', $usuario['nombres']);
            $session->set('id', $usuario['id']);
            $session->set('loggin', true);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Usuario logueado correctamente'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function home()
    {
        if (!session()->loggin) {
            return redirect()->to(base_url('panel'));
        }

        return view('admin/home');
    }
}
