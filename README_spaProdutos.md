# 🛍️ spaProdutos – Sistema Fullstack de Produtos

Este projeto é uma aplicação fullstack com:

- **Frontend**: Vue 3 + Vite
- **Backend (API)**: Laravel
- Funcionalidades de **autenticação de usuários** e **CRUD de produtos**

---

## 📂 Estrutura do Projeto

```
/
├── frontend/     # Vue 3 + Vite
└── backend/      # Laravel API
```

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

---

## 🖥️ Frontend (Vue 3 + Vite)

### 📁 Acesse a pasta do frontend

```bash
cd frontend
```

### 📥 Instale as dependências

```bash
npm install
```

### ▶️ Inicie o servidor de desenvolvimento

```bash
npm run dev
```

### ⚙️ Configuração da IDE

- Use **VSCode + Volar**
- **Desative a extensão Vetur**

### 🧠 Suporte TypeScript com `.vue`

Usamos `vue-tsc` para melhor verificação de tipos em arquivos `.vue`.

---

## 🧩 Backend (Laravel API)

### 📁 Acesse a pasta do backend

```bash
cd backend
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

---

## 🛠️ Tecnologias Usadas

### Frontend

- Vue 3
- Vite
- TypeScript
- Tailwind CSS

### Backend

- Laravel 10+
- Laravel Sanctum
- Eloquent ORM
- MySQL

---

## 📝 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).