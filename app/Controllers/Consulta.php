<?php

namespace App\Controllers;

use App\Models\DepartamentosModel;
use App\Models\ProdutosModel;
use CodeIgniter\Controller;

class Consulta extends Controller
{
    public function __construct()
    {
        // Carrega o helper de URL manualmente
        helper('url');
    }

    public function index()
    {
        $departamentosModel = new DepartamentosModel();
        $departamentos = $departamentosModel->retorna_departamentos();

        $option = "<option value=''></option>";
        foreach ($departamentos as $linha) {
            $option .= "<option value='{$linha['departamentos_id']}'>{$linha['departamentos_nome']}</option>";
        }

        $variaveis['options_departamentos'] = $option;

        return view('consulta', $variaveis);
    }

    public function buscaProdutosPorDepartamento()
    {
        // Obtém o ID do departamento enviado pela requisição POST
        $departamentos_id = $this->request->getPost('departamentos_id');
    
        // Instancia o modelo de produtos
        $produtosModel = new ProdutosModel();
    
        // Busca os produtos do departamento no banco de dados
        $produtos = $produtosModel->where('produtos_id_departamento', $departamentos_id)
            ->orderBy('produtos_nome', 'asc')
            ->findAll();
    
        // Retorna os produtos em formato JSON
        return $this->response->setJSON($produtos);
    }
    
    
}
