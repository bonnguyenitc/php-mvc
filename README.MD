# A PHP MCV project

## You can learn from youtube video: https://www.youtube.com/watch?v=6ERdu4k62wI

## How to run

Requires php >= 7.3, mysql to run.

Install the package

```sh
composer update
```

Run

```sh
cp .env.example .env
php -S localhost:3000 -t public
```

Migrate database

```sh
php migrations.php
```
