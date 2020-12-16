1. Crate database <database_name> <user_name> <password>
2. .git clone https://github.com/ruslan1984/pizza-back.git 
3. cd pizza-back/
4. Composer install
5. cp .env.example .env
6. in .env file set: 
DB_DATABASE=<database_name> 
DB_USERNAME=<user_name>
DB_PASSWORD=<password>
7. php artisan migrate
8. php artisan db:seed --class=PizzaSeeder
9. php artisan key:generate
10. php artisan serve
<a  href='http://127.0.0.1:8000'>http://127.0.0.1:8000</a>
