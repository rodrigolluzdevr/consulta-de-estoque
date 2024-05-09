<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentosModel extends Model
{
    protected $table = 'departamentos';

    public function retorna_departamentos()
    {
        return $this->orderBy('departamentos_nome', 'asc')
                    ->findAll();
    }
}
