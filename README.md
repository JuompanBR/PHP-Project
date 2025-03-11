## BUG OLYMPICS - QA

## Key Concepts
- PSR-12 Standard
- Object Oriented Programming
- Form Submission
- Session Management
- Dockerize and share projects
- Database Querying

## How to use
Install a php interpreter + server ex. XAMP in your environment.
Place this folder into the **/htdocs** folder, in the case of XAMPP or WAMPP.

## Introduction 
This is a fun little game where new players create their own accounts and keep track of how many bugs they find during a sprint. At the end of the sprint, the player who finds the most bugs wins and gets a special bug as a prize!

### ORM 
An ORM (Object-Relational Mapping) is a programming technique used to bridge the gap between object-oriented programming languages (like PHP, Java, or Python) and relational databases (like MySQL, PostgreSQL, or SQL Server). It simplifies how developers interact with a database by allowing them to manipulate database records using objects in their code, rather than writing raw SQL queries.
In this case, we use **doctrine** ORM
### Entities
An entity represents a table in a class. You can create new entities using the 
```
php bin/console make:entity create
```


## Migrations
Are used to generate the sql command to add a new entity in our database.
We use the command below to generate a new migration file
```
php bin/console make:migration
```
## Migrations migrate
Inorder to generate the new tables in the database you can use the:
```
php bin/console doctrine:migrations:migrate
```

## Fixtures
This enables us to load test data into our database.
```
composer require --dev orm-fixtures
```
Then update the ==src/DataFixture== folder 
 <mark>very important words</mark>

Overwrite the tables by using the command
```
php bin/console doctrine:fixtures:load --append
```
### Execute SQL via the cmd
We can execute sql statements through the command line using dbal
```
php bin/console dbal:run-sql "SELECT * FROM player;"
```

