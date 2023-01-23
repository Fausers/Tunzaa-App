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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Rest API

Bellow is the list of API's

### Premium Partners
