<h1 align="center">
  Basic Crud App
</h1>

<h4 align="center">Simple CRUD app for interacting with mySQL databases</h4>

<p align="center">This is a test project (for learning purposes only), based on tutorials mentioned below.</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#credits">Credits</a>
</p>

## Features

-   Create mySQL databases from PHP entities
-   Make SQL queries by using console helpers
-   Generate and populate mySQL databases with fake data using Faker

## How To Use

**IMPORTANT:** For database to work, modify **DATABASE_URL** environment variable in the **.env** file first

### Basic commands

```shell
### Install Composer dependencies
composer install

### Create database
bin/console doctrine:database:create

### Run server
bin/console server:run

### Make SQL query
bin/console doctrine:query:sql
```

### Command line helpers

```shell
### Make entity
bin/console make:entity

### Create migration file
bin/console make:migration

### Create table from migration file
bin/console doctrine:migrations:migrate

### Make a fixture
bin/console make:fixtures

### Create CRUD
bin/console make:crud

### Insert data into database
bin/console doctrine:fixtures:load
```

## Credits

### Attribution

-   [Basic CRUD website tutorial by Alex Vo](https://medium.com/@vtla/create-a-basic-crud-website-with-symfony-4-2-and-some-command-line-helpers-3719677d0e)
-   [Symfony REST, CRUD & Swag tutorial by Luka Gado](https://medium.com/q-software/symfony-5-the-rest-the-crud-and-the-swag-7430cb84cd5)

### Used Open-Source packages:

-   PHP 7.1.3
-   Composer 1.10
-   Symfony 4.4
-   Doctrine 2.0
-   Faker
