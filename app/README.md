# Carteira Digital

Este � um projeto de carteira digital desenvolvido utilizando **Laravel** para o backend, **Vue.js** para o frontend e **MySQL** como banco de dados. O sistema permite o gerenciamento de **Lojistas**, **Clientes** e **Transa��es**, com regras espec�ficas para cada tipo de usu�rio.

## Funcionalidades

- **Lojistas**: CRUD completo (Nome, E-mail, Saldo Inicial, Tipo de Usu�rio).
- **Clientes**: CRUD completo (Nome, E-mail, Saldo Inicial, Tipo de Usu�rio).
- **Transa��es**: Cria��o de transa��es entre **Clientes** (remetentes) e **Lojistas** (destinat�rios), com valida��o de saldo.

## Tecnologias Utilizadas

- **Backend**: Laravel (PHP)
- **Frontend**: Vue.js
- **Banco de Dados**: MySQL

---

## Como Executar o Projeto

### 1. **Pr�-requisitos**

Certifique-se de ter os seguintes softwares instalados:

- **PHP** (vers�o 8.x ou superior)
- **Composer** (gerenciador de pacotes PHP)
- **Node.js** (para o Vue.js)
- **npm** ou **yarn**
- **MySQL** (ou outro banco de dados compat�vel com o MySQL)

### 2. **Passos para Configura��o**

#### a) **Clonando o Reposit�rio**

Clone o reposit�rio para o seu ambiente local:

mkdir (nome da pasta a qual vc quer clonar o reposit�rio)
git clone https://github.com/leonardofdavid/carteiradigital.git

#### b) **Instalando Depend�ncias**

1. Instale as depend�ncias do backend (Laravel):

composer install

2. Instale as depend�ncias do frontend (Vue.js):

npm install

#### c) **Configura��o do Banco de Dados**

1. Crie um banco de dados no MySQL. Voc� pode nome�-lo como `carteira_digital` ou qualquer outro nome que preferir.

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

Se voc� configurou o frontend para rodar no Laravel Mix, o Vue.js ser� servido automaticamente. Caso contr�rio, use o comando abaixo para iniciar o servidor Vue.js separadamente (se aplic�vel):

npm run dev

## Endpoints Dispon�veis

### **1. Lojistas**

- **GET /api/lojistas**  
  **Descri��o**: Lista todos os lojistas.  
  **Resposta**: Lista de lojistas com ID, Nome, E-mail, Saldo Inicial e Tipo de Usu�rio.

- **POST /api/lojistas**  
  **Descri��o**: Cria um novo lojista.  
  **Requisi��o**:
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
  **Descri��o**: Exibe os dados de um lojista espec�fico.  
  **Resposta**: Dados do lojista (ID, Nome, E-mail, Saldo Inicial, Tipo de Usu�rio).

- **PUT /api/lojistas/{id}**  
  **Descri��o**: Atualiza os dados de um lojista espec�fico.  
  **Requisi��o**:
  ```json
  {
    "nome": "Novo Nome",
    "email": "novoemail@exemplo.com",
    "saldo_inicial": 1500.00,
    "tipo_usuario": "lojista"
  }
  ```

- **DELETE /api/lojistas/{id}**  
  **Descri��o**: Deleta um lojista espec�fico.  
  **Resposta**: Mensagem de sucesso ou erro.

---

### **2. Clientes**

- **GET /api/clientes**  
  **Descri��o**: Lista todos os clientes.  
  **Resposta**: Lista de clientes com ID, Nome, E-mail, Saldo Inicial e Tipo de Usu�rio.

- **POST /api/clientes**  
  **Descri��o**: Cria um novo cliente.  
  **Requisi��o**:
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
  **Descri��o**: Exibe os dados de um cliente espec�fico.  
  **Resposta**: Dados do cliente (ID, Nome, E-mail, Saldo Inicial, Tipo de Usu�rio).

- **PUT /api/clientes/{id}**  
  **Descri��o**: Atualiza os dados de um cliente espec�fico.  
  **Requisi��o**:
  ```json
  {
    "nome": "Novo Nome",
    "email": "novoemail@cliente.com",
    "saldo_inicial": 600.00,
    "tipo_usuario": "comprador"
  }
  ```

- **DELETE /api/clientes/{id}**  
  **Descri��o**: Deleta um cliente espec�fico.  
  **Resposta**: Mensagem de sucesso ou erro.

---

### **3. Transa��es**

- **GET /api/transacoes**  
  **Descri��o**: Lista todas as transa��es realizadas.  
  **Resposta**: Lista de transa��es com ID, Remetente, Destinat�rio, Valor e Data.

- **POST /api/transacoes**  
  **Descri��o**: Cria uma nova transa��o entre cliente e lojista.  
  **Requisi��o**:
  ```json
  {
    "remetente_id": 1,
    "destinatario_id": 2,
    "valor": 100.00
  }
  ```
  **Resposta**: Dados da transa��o criada (ID, Remetente, Destinat�rio, Valor, Data).

---

## Considera��es Finais

Este projeto serve como uma base para o desenvolvimento de uma carteira digital com funcionalidades b�sicas de transfer�ncia entre clientes e lojistas. � poss�vel estender o sistema com outras funcionalidades, como autentica��o de usu�rios, notifica��es em tempo real, hist�rico de transa��es, entre outras.