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

* Clone o repositório:
```bash
git clone https://github.com/thiagoesAdapti/authentication-api.git
cd authentication-api
```

* Instale as dependências:
```
composer install
```

* Configure o ambiente:
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