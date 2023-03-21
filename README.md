# chirp with blade

> A simple microblogging platform.


## Built With

- Laravel
- Tailwind Css

## Getting Started

To get a local copy up and running follow these simple example steps.

1. Go to the terminal and `cd` into the directory of your preference.
2. Run `git@github.com:alphayowakarindi/chirper-with-blade.git` to clone the app.
3. `cd` into the clonned app.
4. Run `composer install` to install the required dependencies.
5. Reame or copy `.env.example` file to `.env`.
6. Run `php artisan key:generate` to genearate the app's key.
7. Set your mail credentials in the `.env` file.
8. Ensure you have `sqlite` installed or set your prefered database credentials in your `.env` file
9. Run `php artisan migrate` to migrate the migrations.
10. Run `php artisan queue:work` to start a new worker.
11. Run `php artisan serve` to start the development server.
12. Visit `localhost:8000` in you browser and register to use the app.


## 📝 License

This project is [MIT](./MIT.md) licensed.
