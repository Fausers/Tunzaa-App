## Tunzaa Project

### Installation Instructions
1. Run `git clone https://github.com/Fausers/Tunzaa-App.git`
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create your database ;```
    * ```\q```
3. From the projects root run `nano .env`
4. Configure your `.env` file
5. Run `composer update` from the projects root folder 
6. From the projects root folder run `sudo chmod -R 755 ../laravel-auth`
7. From the projects root folder run `php artisan key:generate`
8. From the projects root folder run `php artisan migrate`


## Rest API

Bellow is the list of API's

### Technologies
1. Laravel 8
2. php 7.4
3. Tailwind css
4. Javascript
5. Mysql 
6. Github
7. Postman
