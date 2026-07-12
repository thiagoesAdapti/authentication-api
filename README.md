# API de Autenticação

API RESTful desenvolvida com Laravel para gerenciar autenticação de usuários. Utiliza Sanctum para autenticação e autorização.

## Tecnologias

* Laravel 12
* Sanctum
* MySQL

## Requisitos

* PHP (8.2+)
* Composer
* MySQL
* Git
* Postman ou Insomnia

## Como rodar o projeto

* Clone o repositório e entre na pasta:
```bash
git clone https://github.com/thiagoesAdapti/authentication-api.git
cd authentication-api
```

* Instale as dependências:
```
composer install
```

* Configure as variáveis de ambiente:
```
cp .env.example .env
php artisan key:generate
```

* Rode as migrations:
```
php artisan migrate
```

* Rode o servidor:
```
php artisan serve
```

A API estará rodando em `http://localhost:8000`

## Endpoints

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| POST | /api/auth/register | Cadastra um novo usuário |
| POST | /api/auth/login | Realiza o login do usuário |
| POST | /api/auth/logout | Realiza o logout do usuário |
| GET | /api/auth/profile | Retorna o perfil do usuário |

## Documentação da API

Este projeto utiliza o [Scramble](https://scramble.dedoc.co/) para geração automática da documentação OpenAPI (Swagger).

Com o servidor rodando, você pode acessar a documentação completa dos endpoints em `http://localhost:8000/docs/api`