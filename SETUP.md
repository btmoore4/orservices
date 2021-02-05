# ORServices Setup
## Dependencies

### MacOs
1. npm
2. composer

## Getting Started 

1. Clone the ORServices repository and go into project directory. 
`git clone https://github.com/sarapis/orservices.git`
`cd orservices`

2. Setup SQL? 

3. .env config? 
`cp .env.example .env`

4. Use composer to pull in PHP dependencies. 
`composer update`

5. Use npm to pull in node dependencies. 
`npm install`

6. chmod ../larable? 

7. Run php artisan setup steps
`php artisan key:generate`
`php artisan migrate`
`php artisan db:seed`

8. Run additional composer command
`composer dump-autoload`
