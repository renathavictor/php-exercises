# PHP Exercises


**Links para estudar PHP**

  
[Book Array](https://www.php.net/manual/pt_BR/book.array.php)

[Manipulação em array](https://www.php.net/manual/pt_BR/ref.array.php)

[Ordenação de Array](https://www.php.net/manual/pt_BR/array.sorting.php)

[Book String](https://www.php.net/manual/pt_BR/book.strings.php)

[Manipulação em String](https://www.php.net/manual/pt_BR/ref.strings.php)

[Funções Matemáticas](https://www.php.net/manual/pt_BR/ref.math.php)

[Multibyte String Funções](https://www.php.net/manual/pt_BR/ref.mbstring.php)

[Manipulação de variável](https://www.php.net/manual/pt_BR/book.var.php)

[Extensões e Núcle PHP](https://www.php.net/manual/pt_BR/extensions.membership.php)

[Guia PHP - Luiz](https://ifpb.github.io/php-guide/core/)

## Usar docker

Rodar arquivo normal
> docker run --rm -it -v $(pwd):/app -w /app php:alpine php caminho-do-arquivo.php

Rodar teste 
> docker run --rm -it -v $(pwd):/app -w /app php:alpine php vendor/bin/kahlan --spec=caminho-teste/spec 

## Usar composer

> composer install

> composer dump-autoload -o