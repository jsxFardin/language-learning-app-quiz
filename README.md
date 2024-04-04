# Language Learning App

1. Install composer packages

```
$ composer install
```

2. Create and setup .env file

```
make a copy of .env.example
$ copy .env.example .env
$ php artisan key:generate
put database credentials in .env file
```

3. Database setup

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

4. Migrate and insert records

```
$ php artisan migrate --seed
```

5. Serving application
```
$ php artisan serve
```

