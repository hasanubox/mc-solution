## Project Setup

This document provides instructions on setting up and running the project. After clone the project please follow these steps to get started

## 1. Install Composer Dependencies
```shell
composer install
```
## 2. Install Node Dependencies
```shell
npm install
```

## 3. Run Database Migrations and Seed Data
```shell
php artisan migrate --seed
```
## 4. Set application key 
You can run the development server using the following command:
```shell
php artisan key:generate
```
## 5. Start the Development Server
You can run the development server using the following command:
```shell
php artisan serve
```
## 6. Compile Frontend Assets
```shell
npm run dev
```
