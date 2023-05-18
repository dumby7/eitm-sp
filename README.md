
# Museum Excursion

## Prerequisites

**Docker version** needs:

Install Docker: https://docs.docker.com/get-docker/

Install Composer: https://getcomposer.org/download/

For **local version** is needed:

Install Composer: https://getcomposer.org/download/

Install Node.js: https://nodejs.org/en/download

Install XAMPP: https://www.apachefriends.org/download.html

## Installtion

Clone the repo:

```bash
git clone https://github.com/dumby7/eitm-sp.git
cd eitm-sp
```

Install dependencies:
```bash
compser install
```

Create environment variables:
```bash
cp .env.example .env
```
and set values as needed.

## Runing a docker version

Run the docker container in a detached mode:
```bash
./vendor/bin/sail up -d
```
(For convenience set up an alias for the sail command: https://laravel.com/docs/10.x/sail#configuring-a-shell-alias)

Compile css and js:
```bash
sail npm install && sail npm run build
```

Generate app key:
```bash
sail artisan key:generate
```

Create database tables:
```bash
sail artisan migrate
```

Seed database tables with initial data:

```bash
sail artisan db:seed
```

From your browser navigate to http://localhost/
PHPMyAdmin is exposed at http://localhost:8001/


Used https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose-on-ubuntu-20-04 for production deployment. 

## Runing a local version

Modify your *.env* file inside the root folder of the project 
```code
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=eitm_sp  
DB_USERNAME=root  
DB_PASSWORD=
```

**DB_CONNECTION** => Change to name of the database, that you are using
**DB_CONNECTION** => IP address of the served web aplication
**DB_PORT** => Change the number of port that the databse use
**DB_USERNAME** => Change to the name of access user database
**DB_PASSWORD** => Password for the access user

Run these commands in terminal for compiling css and js, where is project on your system located ( for example C:\WorkSpace\eitm-sp\

```bash
npm install
npm run build
```

Generate app key:
```bash
php artisan key:generate
```

Create database tables:
```bash
php artisan migrate
```

Seed database tables with initial data:

```bash
php artisan db:seed
```

Run the web aplication server:

```bash
php artisan serve
```

From your browser navigate to your IP that you changed in *.env* (for example http://localhost/)
PHPMyAdmin is exposed at http://localhost/phpmyadmin (if used)