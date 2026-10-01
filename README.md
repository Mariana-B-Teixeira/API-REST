# 📚 FamousBooks — API REST Laravel

Projeto desenvolvido para a atividade **TP - API-REST Laravel**, com o objetivo de desenvolver uma API utilizando **Laravel** como backend para um projeto com React.

O tema escolhido para o cadastro foi **livros**, permitindo realizar operações de CRUD.

---

## 🎯 Objetivo da atividade

A atividade propôs o desenvolvimento de uma API REST com Laravel contendo:

- CRUD de um cadastro;
- No mínimo 7 atributos;
- Atributos dos tipos número, texto e data;
- Integração com banco de dados.

---

## 📚 Projeto

O sistema utiliza o tema **livros** para realizar o cadastro.

Cada livro possui os seguintes atributos:

| Atributo | Tipo |
|---|---|
| `id` | Número |
| `title` | Texto |
| `book_review` | Número |
| `author` | Texto |
| `genre` | Texto |
| `pages` | Número |
| `publication_date` | Data |

Além desses campos, o Laravel também utiliza `created_at` e `updated_at` para registrar as datas de criação e atualização dos registros.

---

## 🛠️ Tecnologias e ferramentas utilizadas

- **PHP**
- **Laravel**
- **MySQL**
- **Composer**
- **Thunder Client** — utilizado para realizar os testes da API

---

## 🔄 CRUD

A API permite realizar as quatro operações básicas de um CRUD:

- **Create:** criar um novo livro;
- **Read:** consultar os livros cadastrados;
- **Update:** atualizar um livro existente;
- **Delete:** excluir um livro.

---

## 🔌 Endpoints

A API possui endpoints para realizar as operações sobre os livros.

### 📖 Listar livros

GET `/api/famous-books`

### 🔎 Consultar um livro

GET `/api/famous-books/{id}`

### ➕ Cadastrar um livro

POST `/api/famous-books`

### ✏️ Atualizar um livro

PUT `/api/famous-books/{id}`

### 🗑️ Excluir um livro

DELETE `/api/famous-books/{id}`

---

## 🗄️ Banco de dados

O projeto utiliza **MySQL** para armazenar os dados dos livros.

A estrutura da tabela é criada por meio das **migrations do Laravel**.

O projeto também possui um **seeder**, utilizado para inserir dados iniciais no banco de dados.

---

## 📁 Estrutura principal

FamousBooks/

├── app/

│   ├── Http/

│   │   └── Controllers/

│   │       └── FamousBooksController.php

│   └── Models/

│       └── FamousBooks.php

├── database/

│   ├── migrations/

│   └── seeders/

├── routes/

│   ├── api.php

│   └── web.php

└── tests/

### Principais componentes

#### Controller

Responsável pelas operações realizadas pela API relacionadas aos livros.

#### Model

Representa os livros e permite trabalhar com os dados armazenados no banco.

#### Migration

Define a estrutura da tabela de livros no banco de dados.

#### Seeder

Insere dados iniciais no banco de dados.

#### Routes

Define as rotas utilizadas para acessar as funcionalidades da API.

---

## 📌 Conceitos praticados

- PHP
- Laravel
- API REST
- CRUD
- Rotas
- Controllers
- Models
- Migrations
- Seeders
- Banco de dados MySQL
- Requisições HTTP
- Respostas em JSON
- Testes de API com Thunder Client

---

## 👩‍💻 Autora

**Mariana Branco Teixeira**

Estudante de Análise e Desenvolvimento de Sistemas.

[GitHub](https://github.com/Mariana-B-Teixeira)
