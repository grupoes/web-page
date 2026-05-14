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

    public function logout()
    {
        $session = session();
        $session->destroy();
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Usuario deslogueado correctamente'
        ]);
    }

    public function home()
    {
        if (!session()->loggin) {
            return redirect()->to(base_url('panel'));
        }

        return view('admin/home');
    }

    public function diagnosticos()
    {
        if (!session()->loggin) {
            return redirect()->to(base_url('panel'));
        }

        return view('admin/diagnosticos');
    }

    public function savePregunta()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $preguntasModel = new \App\Models\PreguntasModel();

        $id = $this->request->getPost('id');
        $enunciado = $this->request->getPost('enunciado');

        if (empty($enunciado)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'El enunciado es obligatorio']);
        }

        $data = [
            'enunciado' => $enunciado,
            'estado'    => 1
        ];

        if (!empty($id)) {
            $data['id'] = $id;
        } else {
            // Si es nueva, calcular el último orden
            $last = $preguntasModel->orderBy('orden', 'DESC')->first();
            $data['orden'] = $last ? $last['orden'] + 1 : 1;
        }

        try {
            $preguntasModel->save($data);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Pregunta guardada correctamente']);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function deletePregunta()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $preguntasModel = new \App\Models\PreguntasModel();
        $id = $this->request->getPost('id');

        try {
            $preguntasModel->update($id, ['estado' => 0]);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Pregunta eliminada']);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function listaPreguntas()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $preguntasModel = new \App\Models\PreguntasModel();
        $preguntas = $preguntasModel->where('estado', 1)->orderBy('orden', 'ASC')->findAll();

        return $this->response->setJSON(['status' => 'success', 'data' => $preguntas]);
    }

    public function reorderPreguntas()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $preguntasModel = new \App\Models\PreguntasModel();
        $ids = $this->request->getPost('ids');

        if (is_array($ids)) {
            foreach ($ids as $index => $id) {
                $preguntasModel->update($id, ['orden' => $index + 1]);
            }
            return $this->response->setJSON(['status' => 'success', 'message' => 'Orden actualizado']);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Datos invalidos']);
    }
    public function listaOpciones()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $opcionesModel = new \App\Models\OpcionesModel();
        $pregunta_id = $this->request->getGet('pregunta_id');

        $opciones = $opcionesModel->where('pregunta_id', $pregunta_id)
                                  ->where('estado', 1)
                                  ->findAll();

        return $this->response->setJSON(['status' => 'success', 'data' => $opciones]);
    }

    public function saveOpcion()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $opcionesModel = new \App\Models\OpcionesModel();

        $id = $this->request->getPost('id');
        $pregunta_id = $this->request->getPost('pregunta_id');
        $texto_opcion = $this->request->getPost('texto_opcion');
        $puntos = $this->request->getPost('puntos');

        if (empty($texto_opcion) || empty($pregunta_id)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'El texto y la pregunta son obligatorios']);
        }

        $data = [
            'pregunta_id'  => $pregunta_id,
            'texto_opcion' => $texto_opcion,
            'puntos'       => $puntos,
            'estado'       => 1
        ];

        if (!empty($id)) {
            $data['id'] = $id;
        }

        try {
            $opcionesModel->save($data);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Opción guardada correctamente']);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function deleteOpcion()
    {
        if (!session()->loggin) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No autorizado']);
        }

        $opcionesModel = new \App\Models\OpcionesModel();
        $id = $this->request->getPost('id');

        try {
            $opcionesModel->update($id, ['estado' => 0]);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Opción eliminada']);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
