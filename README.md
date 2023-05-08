# Museum Excursion

## Installation

Install Docker: https://docs.docker.com/get-docker/

Install Composer: https://getcomposer.org/download/

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
