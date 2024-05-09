# Configuração do Projeto
Este é um guia para configurar o projeto localmente.

# 1. Configuração do Banco de Dados
Certifique-se de ter um banco de dados MySQL instalado localmente. 

Você pode baixar e instalar o MySQL a partir do site oficial.

Após a instalação, abra seu terminal ou prompt de comando e execute os seguintes comandos SQL para criar as tabelas necessárias:

Tabela de Produtos
sql
Copy code
CREATE TABLE produtos (
    produtos_id INT AUTO_INCREMENT PRIMARY KEY,
    produtos_id_departamento INT,
    produtos_nome VARCHAR(255)
);

Tabela de Departamentos
sql
Copy code
CREATE TABLE departamentos (
    departamentos_id INT AUTO_INCREMENT PRIMARY KEY,
    departamentos_nome VARCHAR(255)
);

# 2. Configurações do arquivo .env
lembrar de criar um arquivo .env na raiz do projeto com as seguintes variáveis de ambiente:

plaintext
Copy code
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
Substitua nome_do_seu_banco_de_dados, seu_usuario e sua_senha com as configurações apropriadas do seu banco de dados MySQL.

