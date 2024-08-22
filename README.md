# Object Oriented Programing in PHP exercices <!-- omit in toc -->

## Table of contents <!-- omit in toc -->

- [Requirements](#requirements)
- [How to install](#how-to-install)
- [How to do the exercices](#how-to-do-the-exercices)
  - [Check your results](#check-your-results)
    - [Manual checks](#manual-checks)
    - [Automated checks](#automated-checks)
- [Exercices](#exercices)
  - [Exercice 1](#exercice-1)
  - [Exercice 2](#exercice-2)
  - [Exercice 3](#exercice-3)
  - [Exercice 4](#exercice-4)
  - [Exercice 5](#exercice-5)


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
docker compose exec php-oop-course ./vendor/bin/phpunit ./tests/DummyTest.php
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

All your code must be located in the `app/src` folder.

### Check your results

#### Manual checks

If you want to check your code manually, you could use the `app/src/index.php` file and use your code inside.

You can then use the following command to execute the code in this file :

```bash
docker compose exec php-oop-course php -f src/index.php
```

You can also open your browser and navigate to the `127.0.0.1:8080/src/index.php` to check your code.

#### Automated checks

If you want to check you have completed that exercice, use the following command :

```bash
docker compose exec php-oop-course ./vendor/bin/phpunit tests/Exercice3
```

If you want to check you have completed all the exercices, use the following command :

```bash
docker compose exec php-oop-course ./vendor/bin/phpunit tests
```

## Exercices

### Exercice 1

> Create a new class named `Product`. You should be able to instanciate a new object of this class.

### Exercice 2

> In your precedent class `Product`, add the following properties
>
> - name
> - price
> - dateOfRelease

### Exercice 3

> Modify your precedent class `Product` so its properties has default values : 
>
> - name : "New product"
> - price : 9.99
> - dateOfRelease : the date of today

### Exercice 4

> In your precedent class `Product`, change your properties so that `name` could only be assigned characters, `price` numbers and decimals, `dateOfRelease` a date

### Exercice 5

> In your precedent class `Product`, add typed `getter` and `setter` for each of the properties
