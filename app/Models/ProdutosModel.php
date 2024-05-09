<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table = 'produtos';

    public function retorna_produtos_por_departamento($departamentoID)
    {
        return $this->where('produtos_id_departamento', $departamentoID)
                    ->orderBy('produtos_nome', 'asc')
                    ->findAll();
    }
}
