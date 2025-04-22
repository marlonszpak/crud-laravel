# Projeto CRUD de Alunos e Cursos - Laravel

Este é um sistema simples de cadastro de **Alunos** e **Cursos**, desenvolvido com o framework **Laravel**. Nele é possível criar, visualizar, editar e excluir alunos e cursos.

---

## Tecnologias Utilizadas

- Laravel
- MySQL
- Composer
- HTML + CSS
- Git

---

## Instalação e Execução Local

### 1. Clone o repositório:

```bash
git clone https://github.com/marlonszpak/trabalho-crud-laravel.git
cd trabalho-crud-laravel
```

### 2. Instale as dependências do PHP via Composer:

```bash
composer install
```

### 3. Copie o arquivo `.env` de exemplo e configure:

```bash
cp .env.example .env
```

### 4. Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 5. Configure o banco de dados no arquivo `.env`:

Abra o arquivo `.env` e edite conforme necessário:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel 
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Crie o banco de dados no seu MySQL:

```sql
CREATE DATABASE crud_laravel;
```

### 7. Rode as migrations para criar as tabelas:

```bash
php artisan make:migration criar_tabela_de_cursos
php artisan make:migration criar_tabela_de_alunos
```

```bash
php artisan migrate
```

### 8. Crie os Models:

```bash
php artisan make:model Curso
php artisan make:model Aluno
```

### 9. Crie os Controllers:

```bash
php artisan make:controller CursoController --resource
php artisan make:controller AlunoController --resource
```

## Rodando o projeto

Execute o servidor do Laravel:

```bash
php artisan serve
```

Depois acesse no navegador:

```
http://127.0.0.1:8000
```