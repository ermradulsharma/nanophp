<p align="center">
  <img src="public/logo.png" alt="NanoPHP Logo" width="200">
</p>

# NanoPHP App Skeleton

A lightweight, elegant PHP framework skeleton for modern web applications. Built for speed, simplicity, and a Laravel-like developer experience.

## Features

- **Laravel-Aligned Structure**: Familiar `app/Http`, `app/Models`, and `routes/` organization.
- **Modular Core**: Powered by the standalone `nanophp/framework` package.
- **Blade Templating**: Full support for Blade views.
- **Vite Integration**: Modern frontend bundling with React and Hot Module Replacement (HMR).
- **Elegant CLI**: A powerful `artisan` CLI with 50+ built-in commands.
- **Database & ORM**: Fluent query building and Eloquent-like migrations.

## Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/your-username/nanophp-skeleton.git your-project
   cd your-project
   ```

2. **Install dependencies**:

   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run Development Servers**:
   ```bash
   php artisan serve
   npm run dev
   ```

## Project Structure

- `app/Http/Controllers`: Your application controllers.
- `app/Http/Middleware`: Custom request filters.
- `app/Models`: Database models.
- `config/`: Application and framework configuration.
- `database/`: Migrations, seeders, and factories.
- `resources/`: Views (Blade), CSS, and JS (React).
- `routes/`: Web and Console route definitions.
- `storage/`: Framework-generated files (logs, cache, views).

## License

The NanoPHP framework is open-sourced software licensed under the [MIT license](LICENSE).

## Credits

- **Laravel Framework**: Inspired by the elegant architecture and clean coding patterns of [Laravel](https://laravel.com).
- **Illuminate Components**: Powered by various [Illuminate](https://github.com/illuminate) components for database, validation, and views.
