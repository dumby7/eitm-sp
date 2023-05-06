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
