# Projeto Full-Stack de Cadastro de Livros

Este é um projeto de demonstração de uma aplicação web completa (Full-Stack) para um sistema de cadastro de livros, utilizando Laravel para o back-end e React para o front-end.

---

## Tecnologias Utilizadas

* **Back-end:** Laravel 12
* **Front-end:** React 18
* **Banco de Dados:** MySQL (gerenciado pelo XAMPP)
* **Comunicação API:** Axios
* **Roteamento no Front-end:** React Router DOM

---

## Como Executar o Projeto

Para executar este projeto, o back-end (API) e o front-end precisam ser iniciados em **terminais separados**.

### 1. Configuração do Back-end (API em Laravel)

1.  Abra um terminal e navegue até a pasta da API:
    ```shell
    cd api-livros
    ```

2.  Instale as dependências do PHP:
    ```shell
    composer install
    ```

3.  Crie o seu ficheiro de ambiente a partir do exemplo:
    ```shell
    copy .env.example .env
    ```

4.  No ficheiro `.env` que foi criado, configure a sua conexão com o banco de dados (geralmente para o XAMPP, as configurações padrão de `DB_DATABASE`, `DB_USERNAME`, etc., já funcionam se você criar uma base de dados com o nome `api-livros`).

5.  Gere a chave da aplicação:
    ```shell
    php artisan key:generate
    ```

6.  Execute as migrações para criar as tabelas no banco de dados:
    ```shell
    php artisan migrate
    ```

7.  Inicie o servidor da API:
    ```shell
    php artisan serve
    ```
    > ⮕ A API estará a rodar em `http://127.0.0.1:8000`. Deixe este terminal aberto.

### 2. Configuração do Front-end (Aplicação em React)

1.  Abra um **novo terminal** e navegue até a pasta do front-end:
    ```shell
    cd frontend-livros
    ```
    
2.  (Apenas se estiver a usar PowerShell e os comandos `npm` forem bloqueados) Permita a execução de scripts para esta sessão:
    ```powershell
    Set-ExecutionPolicy Bypass -Scope Process
    ```
    (Pressione `S` para confirmar).

3.  Instale as dependências do JavaScript:
    ```shell
    npm install
    ```

4.  Inicie a aplicação React:
    ```shell
    npm start
    ```
    > ⮕ A aplicação abrirá automaticamente no seu navegador em `http://localhost:3000`.
