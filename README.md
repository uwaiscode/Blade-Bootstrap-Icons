# Blade Bootstrap Icons

A package to easily make use of [Bootstrap Icons](https://icons.getbootstrap.com/) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [https://icons.getbootstrap.com/]((https://icons.getbootstrap.com/).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require uwaiscode/blade-bootstrapicons
```

## Configuration

Blade Bootstrap Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-bootstrapicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-bootstrapicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-bootstrapicon-house/>
```

You can also pass classes to your icon components:

```blade
<x-bootstrapicon-house class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-bootstrapicon-house style="color: #7411f6"/>
```