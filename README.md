# Carteira Digital

Este é um projeto de carteira digital desenvolvido utilizando **Laravel** para o backend, **Vue.js** para o frontend e **MySQL** como banco de dados. 
O sistema permite o gerenciamento de **Lojistas**, **Clientes** e **Transações**, com regras específicas para cada tipo de usuário.

## Funcionalidades

- **Lojistas**: CRUD completo (Nome, E-mail, Saldo Inicial, Tipo de Usuário).
- **Clientes**: CRUD completo (Nome, E-mail, Saldo Inicial, Tipo de Usuário).
- **Transações**: Criação de transações entre **Clientes** (remetentes) e **Lojistas** (destinatários), com validação de saldo.

## Tecnologias Utilizadas

- **Backend**: Laravel (PHP)
- **Frontend**: Vue.js
- **Banco de Dados**: MySQL

---

## Como Executar o Projeto

### 1. **Pré-requisitos**

Certifique-se de ter os seguintes softwares instalados:

- **PHP** (versão 8.x ou superior)
- **Composer** (gerenciador de pacotes PHP)
- **Node.js** (para o Vue.js)
- **npm** ou **yarn**
- **MySQL** (ou outro banco de dados compatível com o MySQL)

### 2. **Passos para Configuração**

#### a) **Clonando o Repositório**

Clone o repositório para o seu ambiente local:

mkdir (nome da pasta a qual vc quer clonar o repositório)
git clone https://github.com/leonardofdavid/carteiradigital.git

#### b) **Instalando Dependências**

1. Instale as dependências do backend (Laravel):

composer install

2. Instale as dependências do frontend (Vue.js):

npm install

#### c) **Configuração do Banco de Dados**

1. Crie um banco de dados no MySQL. Você pode nomeá-lo como `carteira_digital` ou qualquer outro nome que preferir.

2. Copie o arquivo `.env.example` para `.env`:

cp .env.example .env

3. No arquivo `.env`, configure as credenciais do seu banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=rootpassword

4. Execute as migrations para criar as tabelas no banco de dados:

php artisan migrate

#### d) **Compilando os Assets (Frontend)**

Compile os assets do Vue.js:

npm run dev

#### e) **Executando o Servidor Laravel**

Para iniciar o servidor Laravel, use o comando:

php artisan serve

#### f) **Executando o Frontend (Vue.js)**

Se você configurou o frontend para rodar no Laravel Mix, o Vue.js será servido automaticamente. 
Caso contrário, use o comando abaixo para iniciar o servidor Vue.js separadamente (se aplicável):

npm run dev

## Endpoints Disponíveis

### **1. Lojistas**

- **GET /api/lojistas**  
  **Descrição**: Lista todos os lojistas.  
  **Resposta**: Lista de lojistas com ID, Nome, E-mail, Saldo Inicial e Tipo de Usuário.

- **POST /api/lojistas**  
  **Descrição**: Cria um novo lojista.  
  **Requisição**:
  ```json
  {
    "nome": "Nome do Lojista",
    "email": "email@exemplo.com",
    "saldo_inicial": 1000.00,
    "tipo_usuario": "lojista"
  }
  ```
  **Resposta**: Dados do lojista criado.

- **GET /api/lojistas/{id}**  
  **Descrição**: Exibe os dados de um lojista específico.  
  **Resposta**: Dados do lojista (ID, Nome, E-mail, Saldo Inicial, Tipo de Usuário).

- **PUT /api/lojistas/{id}**  
  **Descrição**: Atualiza os dados de um lojista específico.  
  **Requisição**:
  ```json
  {
    "nome": "Novo Nome",
    "email": "novoemail@exemplo.com",
    "saldo_inicial": 1500.00,
    "tipo_usuario": "lojista"
  }
  ```

- **DELETE /api/lojistas/{id}**  
  **Descrição**: Deleta um lojista específico.  
  **Resposta**: Mensagem de sucesso ou erro.

---

### **2. Clientes**

- **GET /api/clientes**  
  **Descrição**: Lista todos os clientes.  
  **Resposta**: Lista de clientes com ID, Nome, E-mail, Saldo Inicial e Tipo de Usuário.

- **POST /api/clientes**  
  **Descrição**: Cria um novo cliente.  
  **Requisição**:
  ```json
  {
    "nome": "Nome do Cliente",
    "email": "email@cliente.com",
    "saldo_inicial": 500.00,
    "tipo_usuario": "comprador"
  }
  ```
  **Resposta**: Dados do cliente criado.

- **GET /api/clientes/{id}**  
  **Descrição**: Exibe os dados de um cliente específico.  
  **Resposta**: Dados do cliente (ID, Nome, E-mail, Saldo Inicial, Tipo de Usuário).

- **PUT /api/clientes/{id}**  
  **Descrição**: Atualiza os dados de um cliente específico.  
  **Requisição**:
  ```json
  {
    "nome": "Novo Nome",
    "email": "novoemail@cliente.com",
    "saldo_inicial": 600.00,
    "tipo_usuario": "comprador"
  }
  ```

- **DELETE /api/clientes/{id}**  
  **Descrição**: Deleta um cliente específico.  
  **Resposta**: Mensagem de sucesso ou erro.

---

### **3. Transações**

- **GET /api/transacoes**  
  **Descrição**: Lista todas as transações realizadas.  
  **Resposta**: Lista de transações com ID, Remetente, Destinatário, Valor e Data.

- **POST /api/transacoes**  
  **Descrição**: Cria uma nova transação entre cliente e lojista.  
  **Requisição**:
  ```json
  {
    "remetente_id": 1,
    "destinatario_id": 2,
    "valor": 100.00
  }
  ```
  **Resposta**: Dados da transação criada (ID, Remetente, Destinatário, Valor, Data).

---

## Considerações Finais

Este projeto serve como uma base para o desenvolvimento de uma carteira digital com funcionalidades básicas de transferência entre clientes e lojistas.
É possível estender o sistema com outras funcionalidades, como autenticação de usuários, notificações em tempo real, histórico de transações, entre outras.
