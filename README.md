## Docker

```
$ docker-compose build

$ docker-compose up -d

$ docker-compose exec app php -r "file_exists('.env') || copy('.env.example', '.env');"

$ docker-compose exec app composer install

$ docker-compose exec app php artisan key:generate

$ docker-compose exec app php artisan storage:link

$ docker-compose exec app chmod -R 777 storage

$ docker-compose exec app chmod -R 777 bootstrap/cache

$ docker-compose exec app php artisan config:cache

$ docker-compose exec app php artisan migrate:fresh --seed
```

```
cd backend
php artisan key:generate
php artisan config:cache
php artisan migrate:fresh
```

php artisan make:model -m

docker-compose up -d --build

クジラの中
docker-compose exec app bash

docker-compose exec app bash
php artisan migrate

Git 系

```

git status
git add .
git status
git commit -m "feat create docker db container"
git log

```
