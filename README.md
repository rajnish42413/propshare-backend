# Propshare PWA Backend

## DataBase Design
  ![alt text](https://res.cloudinary.com/dh7apsl5o/image/upload/v1571078665/Innoscripta-pizza-task_itf5dp.png)


<hr>

## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone https://github.com/rajnish42413/pizza-backend.git
```

After cloning, run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

Then run:

```bash
php artisan key:generate
```


### Prerequisites

Be sure to fill in your database details in your `.env` file before running the migrations and seeding:

```bash
php artisan migrate --seed
```

And finally, start the application:

```bash
php artisan serve
```

and visit [http://localhost:8000](http://localhost:8000) to see the application in action.

## Built With

* [Laravel](https://laravel.com) - The PHP Framework For Web Artisans
