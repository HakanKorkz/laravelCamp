#!/bin/bash

php artisan make:migration create_$1_table --create=$1
php artisan make:controller $1Controller
php artisan make:model $1
php artisan make:request $1Request
php artisan db:seed --class=$1Seeder
php artisan make:factory $1Factory --model=$1
