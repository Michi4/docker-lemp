# docker-lemp
Easy and fast docker-compose for the LEMP (Linux, NGINX, MYSQL, PHP) stack.


## WHAT MAKES THIS BETTER

It is just simple and easy to use. Everything preconfigured.

### USAGE

Hosting (eg. for developing) XAMPP alternative 

Dockerized LEMP stack (Linux, Nginx, MySQL, PHP).

Runs everywhere independent.



## HOW TO USE


### Windows
Install docker or Docker-Desktop

Clone the Repository
``` bash
git clone https://github.com/Michi4/docker-lemp
```
Switch folder
``` bash
cd docker-lemp
```
Run
``` bash
docker-compose up -d
```
Now you can open any browser or curl for localhost:80

### Linux
Don't forget to update and upgrade repos
``` bash
sudo apt-get update && sudo apt upgrade -y
```
Then install docker
``` bash
sudo apt-get install docker
```
Then install docker-compose
``` bash
sudo apt-get install docker
```

Clone the Repository
``` bash
git clone https://github.com/Michi4/docker-lemp
```
Switch folder
``` bash
cd docker-lemp
```
Run
``` bash
docker-compose up -d
```
Now you can open any browser or curl for localhost:80

### Database connection
```php
$_db_host = "database"; // MySQL server hostname (Docker service name)
$_db_datenbank = "spacerunner";
$_db_username = "spacerunner";
$_db_passwort = "spacerunner";

// Establish a connection to the database
$mysqli = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);
```

#### EXCUSES:
First docker-compose. Maybe some updates for more configs but it should still stay rather simple.
