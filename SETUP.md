# ORServices Setup
## Dependencies

#### MacOs
1. npm 
2. composer
3. mysql

## Getting Started 

1. Clone the ORServices repository and go into project directory. 
```
git clone https://github.com/sarapis/orservices.git
cd orservices
```

2. Create a new .env config file from example file. 
```
cp .env.example .env
```

3. Use composer to pull in PHP dependencies. 
```
composer update
```

4. Use npm to pull in node dependencies. 
```
npm install
```

5. Start mysql and create a database
```
mysql -u root -p
CREATE DATABASE laravel;
```

6. Add mysql password and database name to the .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```

7. Run php artisan key gen.
```
php artisan key:generate
```

8. Create the necessary tables by running the sql dump.
```
mysql -u root -p laravel < database/dump/15022021.sql
```

9. Run php artisan db seed.
```
php artisan db:seed
```

10. Run additional composer command
```
composer dump-autoload
```

11. As long as the other steps went well
```
php artisan serve
```

12. Minor PHP bugs (Might happen). Make sure to correctly access map property.
```
@if($map['active'] == 0)
```