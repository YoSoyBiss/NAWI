#!/bin/bash

# Asegúrate de que las migraciones se ejecuten al iniciar
php artisan migrate --force

# Comienza la ejecución de Laravel
exec "$@"
