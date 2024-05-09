<?php

namespace App\Models;

use CodeIgniter\Model;

class M_departamentos_produtos extends Model
{
    protected $tableDepartamentos = 'departamentos';

    public function retorna_departamentos()
    {
        return $this->db->table($this->tableDepartamentos)
            ->orderBy('departamentos_nome', 'asc')
            ->get()
            ->getResult();
    }
}
