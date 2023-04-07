#!/bin/bash

# Yeni terminalleri açın
start ""  bash -c "php artisan optimize:clear; exec bash exit"
start ""  bash -c "pnpm dev; exec bash"
start ""  bash -c "php artisan serve; exec bash"
