<?php

namespace App\Models;

use CodeIgniter\Model;

class OpcionesModel extends Model
{
    protected $table      = 'opciones';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['pregunta_id', 'texto_opcion', 'puntos', 'estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
