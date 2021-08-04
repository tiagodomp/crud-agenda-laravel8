## What is this?

A simple and objective crud with Laravel 8, Mysql 8 and PHP 8!
And the front built with Blade and Bootstrap 5.

* The entire docker structure was built with Sail
* Laravel Repository Pattern to avoid the DRY principle

## Requirements
Make sure the following tools are installed on the test computer

* Docker and docker-compose

## Installation


In the base folder of the project, in a terminal Linux, execute the following command:

```bash
docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/opt -w /opt laravelsail/php80-composer:latest composer install
```
See that after the end of the command the vendor was installed, then we will make an alias, to facilitate future processes. 

Still in the terminal, execute the following commands to generate the alias and the .env file

```bash
alias sail='bash vendor/bin/sail'

cp .env.example .env
```
Then run the next command to start the dockers containers, making sure you don't have any other versions of MySql or Redis on the ports defined in .env

```bash
sail up -d
```

and 

```bash
sail php artisan migrate
```

If none has occurred, simply access CRUD by typing in your browser `http://localhost`
