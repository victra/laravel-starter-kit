<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# About Laravel Backend Starter Kit
Laravel Backend Starter Kit is a project created by codedoct developer, that use for easyly create a project backend with laravel.

# Feature
1. Auth with RBAC (Role Base Access Controll)
2. Error handling
3. Doctrine migration
4. Support payment with midtrans
5. Support notification and chat with Firebase
6. Storage file with AWS
7. Indonesian geograph
8. Can access API with login or public
9. Support create PDF to download

# Instalation
> Required php 5.6
1. Create .env file from .env.example file.
2. Build the composer:
```
$ composer install
```
3. Fill project information like DB, AWS key, mailtrap, etc to .env file
4. Create folder "doctrine" in path /database/migrations/
5. Migration Database:
```
$ php artisan doctrine:migration:diff
$ php artisan doctrine:migration:migrate
```
6. Seeding Database:
```
$ php artisan db:seed
```
7. Give full access to path storage (linux)
```
$ sudo chmod -R 777 storage/
```

# How to use
> Please read http://www.codedoct.com/2018/07/laravel-starter-kit-laravel-project.html for detail

## Migration
All table migration in /app/Entities/ path, for documentation just read https://www.laraveldoctrine.org/.
If you want update your table, you can just edit entities file and update your table with
```
$ php artisan doctrine:migration:diff
$ php artisan doctrine:migration:migrate
```

## Controller
All controller in /app/Http/Controllers/ path.

## Model
All model in /app/Models/ path.

## Service
For global method use services in /app/Http/Services/ path.

## Email
Send email with queue jobs in /app/Jobs/ path and handler email in /app/Mail/.
All resource email template in /resources/views/mail/ path.

## Routes
All routes in /routes/ path.

## Image
Image save with 2 type which can switch in .env file "STORAGE_FILE="
1. type "server" => STORAGE_FILE=server
this type will save all store image in /public/uploads/ path on server
2. type "s3" => STORAGE_FILE=s3
this type will save all store image in S3 AWS, you must fill your IAM(AWS) config to .env file



