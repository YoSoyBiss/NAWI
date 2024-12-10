#!/bin/bash

# Esperar a que la base de datos esté lista
echo "Esperando a que la base de datos esté lista..."
until php artisan migrate --force; do
  echo "Base de datos no disponible. Reintentando en 5 segundos..."
  sleep 5
done

# Optimizar y servir la aplicación
php artisan optimize
exec "$@"
