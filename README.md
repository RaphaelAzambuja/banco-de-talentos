# 🚀 API de Talentos

API REST desenvolvida em Laravel, feita para simular uma seção de "trabalhe conosco".

---

## 📚 Sumário

- [🚀 Sobre](#sobre)
- [🛠️ Tecnologias](#tecnologias)
- [📦 Instalação](#instalação)
<!-- - [⚙️ Uso](#uso)
- [🧪 Testes](#testes)
- [📫 Contato](#contato) -->

---

## 🚀 Sobre

Esta API fornece endpoints para:

- Cadastro e autenticação de usuários
- Cadastro de currículos
- Filtros e buscas avançadas
- Envio de e-mails 

---

## 🛠️ Tecnologias

- [Laravel](https://laravel.com/)
- PostgreSQL
- Laravel Sail (Biblioteca que abstrai o docker)
- JWT para autenticação
- [Pest](https://pestphp.com/) para testes

---

## 📦 Instalação

```bash
# Clone o repositório
git clone https://github.com/seuusuario/sua-api.git

# Copie e configure o .env
cp .env.example .env
# edite DB_CONNECTION, DB_DATABASE, DB_USERNAME, etc.

# Suba o ambiente com Sail
./vendor/bin/sail up -d

# Instale as dependências
./vendor/bin/sail composer install

# Gere a chave da aplicação
./vendor/bin/sail artisan key:generate

# Rode as migrações
./vendor/bin/sail artisan migrate
