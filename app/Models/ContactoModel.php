<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactoModel extends Model
{
    protected $table      = 'contactos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id', 'nombre', 'correo', 'celular', 'carrera', 'ciudad', 'universidad', 'fecha', 'usuario', 'password', 'sistema_origen', 'estado', 'sincronizado', 'origen'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
