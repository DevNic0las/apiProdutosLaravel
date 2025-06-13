# Backend - CRUD de produtos

Este projeto é uma aplicação fullstack com:

- **Backend (API)**: Laravel
- Funcionalidades de **autenticação de usuários** e **CRUD de produtos**

---

## 🚀 Funcionalidades

- Cadastro e login de usuários (Laravel Sanctum)
- CRUD completo de produtos
- Integração frontend-backend via requisições HTTP autenticadas
- Interface moderna com Vue 3 e Tailwind CSS

---

## ⚙️ Requisitos

- Node.js >= 16.x
- PHP >= 8.1
- Composer
- MySQL (ou outro banco suportado)
- Git

---

## 📦 Instalação do Projeto

### 🔧 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/spaProdutos.git
cd spaProdutos
```


### ⚙️ Configuração da IDE

- Use **VSCode**


## 🧩 Backend (Laravel API)

### 📁 Acesse a pasta do backend

```bash
cd Nome da pasta
```

### 📥 Instale as dependências PHP

```bash
composer install
```

### 📄 Copie o `.env` e configure

```bash
cp .env.example .env
```

Atualize com suas credenciais de banco de dados:

```env
DB_DATABASE=spa_produtos
DB_USERNAME=root
DB_PASSWORD=senha
```

### 🔑 Gere a chave da aplicação

```bash
php artisan key:generate
```

### 🧱 Rode as migrations

```bash
php artisan migrate
```

---

## 🔐 Autenticação com Laravel Sanctum

O projeto usa **Laravel Sanctum** para autenticação com tokens. O frontend envia credenciais e recebe um token, usado nas requisições protegidas.

---

## 📡 Principais Rotas da API

### 🧑‍💻 Autenticação

- `POST /api/register` – Criar usuário
- `POST /api/login` – Login
- `GET /api/user` – Ver usuário logado
- `POST /api/logout` – Logout

### 📦 Produtos (requer autenticação)

- `GET /api/products` – Listar produtos
- `POST /api/products` – Criar produto
- `GET /api/products/{id}` – Visualizar produto
- `PUT /api/products/{id}` – Atualizar produto
- `DELETE /api/products/{id}` – Remover produto
- `GET` /api/category - Listar categorias
- `POST` /api/category- Criar uma categoria
- `DELETE` /api/category/{id} - Deletar uma categoria
- `PUT` /api/Category/{id} - Atualizar uma categoria
---

## 🛠️ Tecnologias Usadas


### Backend

- Laravel 10+
- Laravel Sanctum
- Eloquent ORM
- MySQL

