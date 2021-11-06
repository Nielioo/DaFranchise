# DaFranchise

Franchise website using Laravel

AFL Web Development Semester 3 (8 November 2021)

## How to use this project

- Make sure your xampp or wampp already on latest version because this project use Laravel 8.0 and require PHP 7.3.0
- Clone this project and run git bash terminal
- Run this following command in bash terminal
      ```
      $ composer install
      ```
      ```
      $ composer global require laravel/installer
      ```
      ```
      $ cp .env.example .env
      ```
      ```
      $ php artisan key:generate
      ```
- setup .env file then run migrate command
      ```
      $ php artisan migrate --seed
      ```
      ```
      $ php artisan serve
      ```
- Open in browser 
