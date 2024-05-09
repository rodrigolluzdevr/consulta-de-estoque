<?php

namespace Config;

use CodeIgniter\Config\BaseService;

class Services extends BaseService
{
    public static function boot($config = null, bool $getShared = true)
    {
        // Chamar o método boot do pai
        parent::boot($config, $getShared);

        // Adicionar o helper de URL manualmente
        helper('url');

        // Adicionar os outros helpers necessários
        helper(['html', 'form']);

        // Adicionar o serviço de validação
        \Config\Services::validation();

        // Adicionar o serviço de session
        \Config\Services::session();
    }
}
