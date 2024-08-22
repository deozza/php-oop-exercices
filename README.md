# Object Oriented Programing in PHP exercices

## Requirements

- `docker` and `docker compose` must be installed to use this template
- you must have basic knowledge of PHP

## How to install

1. `git clone https://github.com/deozza/php-oop-course`
2. `cd php-oop-course`
3. `docker compose up -d --build`
4. `docker compose exec php-oop-course composer install`

Check that your installation was successful by executing :

```bash
docker compose exec php-oop-course ./vendor/bin/phpunit tests
```

You should have the following result :

```bash
PHPUnit 11.3.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.22

.                                                                   1 / 1 (100%)

Time: 00:00.009, Memory: 6.00 MB

OK (1 test, 1 assertion)
```

## How to do the exercices

This repository is based on TDD. Tests asserting you have answered correctly are already written. You can assume you have answered as you should have by executing the tests and none of them are failing.

In order to use this system, you will need to follow closely the instructions of each exercice. This is also true for naming your folders, your files, your classes, etc.

Before starting an exercice, you will need to create a new folder in the `/app/src` folder named after the exercice. For example, if you are on `Exercice 3`, you would have to create the following folder : 

```bash
mkdir ./app/src/Exercice3
```

All the code related to that exercice must be in its folder.

If you want to check you have completet that exercice, use the following command :

```bash
docker compose exec php-oop-course ./vendor/bin/phpunit tests/Exercice3
```

If you want to check you have completed all the exercices, use the following command :

```bash
docker compose exec php-oop-course ./vendor/bin/phpunit tests
```

## Exercices

### Exercice 1

> Create a class Product et instanciate a new object of this class.