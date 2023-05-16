
## Installation (Instructions adapted from Brad Traversy's README)
1. Install Laravel Dependencies:
  Make sure you have installed all necessary dependencies. In the root folder, run:
  ```composer install```

2. Set up your database:
  This app uses MySQL. If you want to use something different, open up `config/Database.php` and change the default driver. To use MySQL, install it, set up a database, and then add your credentials (__database name, username, and password__) to the .env.example file and rename it to .env. I set up my database using MAMP.

3. Create all necessary tables and columns:
  This will create the necessary tables and columns in your database:
  ```php artisan migrate```

4. Seed the database:
  This will populate the database with initial data:
```php artisan db:seed```

5. Serve the application:
  Start your local dev server by running:
  ```php artisan serve```

6. Access the app:
  Once the dev server is up and running, you can access the Laravel app by navigating to `http://localhost:8000` in your browser. 

