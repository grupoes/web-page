<?php

namespace App\Controllers;

class Liam extends BaseController
{
    public function index()
    {
        $preguntasModel = new \App\Models\PreguntasModel();
        $opcionesModel = new \App\Models\OpcionesModel();

        $preguntas = $preguntasModel->where('estado', 1)->orderBy('orden', 'ASC')->findAll();

        foreach ($preguntas as &$pregunta) {
            $pregunta['opciones'] = $opcionesModel->where('pregunta_id', $pregunta['id'])
                                                  ->where('estado', 1)
                                                  ->orderBy('puntos', 'DESC')
                                                  ->findAll();
        }

        return view('liam/index', [
            'preguntas' => $preguntas
        ]);
    }
}
