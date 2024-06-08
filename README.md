## Banco de Talentos

Esta é uma aplicação para gerenciamento de currículos. Permite aos usuários enviar seus currículos através de um formulário e visualizá-los posteriormente em uma lista.

Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:

- PHP
- Composer

Instalação

1. Clone este repositório para o seu ambiente de desenvolvimento:
    
    git clone https://github.com/RaphaelAzambuja/banco-de-talentos
    
2. Navegue até o diretório do projeto:
    
    cd banco-de-talentos
    
3. Instale as dependências do Composer:
    
    composer install
    
4. Copie o arquivo .env.example e renomeie-o para .env:
    
    cp .env.example .env
    
5. Gere uma chave de aplicativo Laravel:
    
    php artisan key
    
6. Configure o banco de dados no arquivo .env, incluindo o tipo de banco de dados, nome do banco de dados, usuário e senha.
7. Execute as migrações do banco de dados para criar as tabelas necessárias:
    
    php artisan migrate
    
8. Inicie o servidor de desenvolvimento:
    
    php artisan serve
    
9. Acesse o aplicativo em seu navegador no endereço http://localhost:8000.

Uso

- Os usuários podem acessar a página de envio de currículos em /curriculums/create.
- Os currículos enviados são armazenados no banco de dados e podem ser visualizados na página principal em /curriculums.
