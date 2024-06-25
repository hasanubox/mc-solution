## Project Setup

This document provides instructions on setting up and running the project. After clone the project please follow these steps to get started

1. Copy `.env.example` to `.env`

## 2. Install Composer Dependencies
```shell
composer install
```
## 3. Install Node Dependencies
```shell
npm install
```
# 4. Configure the Database and Email

- In the `.env` file you created in step 1, set up your database credentials:
- Create a database and add its name and credentials in the `.env` file.

## 5. Run Database Migrations and Seed Data
```shell
php artisan migrate --seed
```
## 6. Set application key 
You can run the development server using the following command:
```shell
php artisan key:generate
```
## 7. Start the Development Server
You can run the development server using the following command:
```shell
php artisan serve
```
## 8. Compile Frontend Assets
```shell
npm run dev
```
