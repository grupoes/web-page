<?php

namespace App\Models;

use CodeIgniter\Model;

class PreguntasModel extends Model
{
    protected $table      = 'preguntas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id', 'enunciado', 'estado', 'orden'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
