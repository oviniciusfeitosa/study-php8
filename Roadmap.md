# Roadmap

- Criar projeto do grupo1 

```sh
composer create-project --prefer-dist laravel/lumen grupo1
```

- Testar a api

```sh
php -S localhost:8000 -t public
```

- Instalar extensões do php

```sh
sudo apt install php8.0-xml php8.0-mbstring
```

- Composer update

```sh
 composer update
``` 

- Adicionar comandos do Artisan ao Lumen

```sh
 composer require flipbox/lumen-generator
```

- Registrar o provider do Lumen Generator

```php
 $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```

- Criar a model Pessoa e propriedades
```sh
php artisan make:model Pessoa
```

- Criar controller Pessoa

```sh
php artisan make:controller PessoaController
```

- Testar a aplicação grupo1

```sh
php -S localhost:8000 -t public
```
