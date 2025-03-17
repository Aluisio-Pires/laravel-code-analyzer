# Laravel Code Analyzer

Laravel Code Analyzer provides convenient Artisan commands to simplify your code quality workflow. It integrates common PHP static analysis tools into your Laravel project, making it easy to maintain clean, efficient, and high-quality code.

## Installation

Install the package via Composer:

```bash
composer require aluisio/laravel-code-analyzer --dev
```

Laravel should automatically discover the service provider. If not, add the following service provider to your `config/app.php` file:

```php
Aluisio\LaravelCodeAnalyzer\LaravelCodeAnalyzerServiceProvider::class,
```

## Usage

The package provides the following Artisan commands:

### Run Pint

```bash
php artisan pint
```

Pass additional arguments directly to Pint:

```bash
php artisan pint --test
```

### Run PHPStan

```bash
php artisan phpstan analyse
```

Pass additional arguments directly to PHPStan:

```bash
php artisan phpstan analyse --memory-limit=2G
```

### Run Rector

```bash
php artisan rector
```

Pass additional arguments directly to Rector:

```bash
php artisan rector --dry-run
```

### Run All Analysis Commands

Run all analysis commands sequentially (Pint, Rector, PHPStan):

```bash
php artisan analyse
```

## Requirements

- Laravel 9 or higher
- Pint
- Rector
- PHPStan

## Author

**Aluisio Pires**  
Email: [aluisiopireseng@gmail.com](mailto:aluisiopireseng@gmail.com)

---

© 2025 Aluisio Pires
