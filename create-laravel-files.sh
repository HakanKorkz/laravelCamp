#!/bin/bash

# ilk parametreyi al
if [ -z "$1" ]
  then
    echo "Lütfen bir isim girin:"
    # shellcheck disable=SC2162
    read name
  else
    name=$1
fi

# ikinci parametreyi al (isteğe bağlı)
if [ -z "$2" ]
  then
    options="--resource"
  else
    # shellcheck disable=SC2034
    # shellcheck disable=SC2082
    options="--${$2}"
fi

# / karakterine göre ayır
# shellcheck disable=SC2206
arr=(${name//\// })

# son olarak dosyayı oluştur
php artisan make:controller "${name}"Controller "${options}"
php artisan make:request "${name}"Request
php artisan make:model "${name}"
php artisan make:migration create_"${arr[-1]}"_table --create="${arr[-1]}"
php artisan make:seeder "${name}"Seeder
php artisan make:factory "${name}"Factory
