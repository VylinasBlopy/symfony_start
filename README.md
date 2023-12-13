# symfony_start

## Description
Un projet symfony pour start rapidement avec un lot de tools pré-installé.

## Requirements
- [x] PHP
- [x] Composer

## Recommended
- [x] Symfony CLI
- [x] PhpStorm

## Tools
- [x] [php-cs-fixer](/docs/php-cs-fixer.md)
- [x] [Commitizen](/docs/commitizen.md)

## Installation

```bash
git clone https://github.com/VylinasBlopy/symfony_start.git

cd symfony_start

composer install
```

## Usage

Si vous avez installé Symfony CLI, vous pouvez utiliser la commande suivante pour lancer le serveur :

```bash
symfony serve
```

## Test

Les test sont fait avec PHPUnit.

```bash
# Lancer tous les tests
php bin/phpunit 

# Lancer les tests d'un dossier
php bin/phpunit tests/Form

# Lancer les tests d'un fichier
php bin/phpunit tests/Form/UserTypeTest.php
```