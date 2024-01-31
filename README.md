# Setup Expert Gate in Local machine

- `git clone https://github.com/Sydney-IBS/Expert Gate.git`
- `cd Expert Gate`
- `composer install`
- `npm install`
- `php artisan migrate:fresh --seed`
- `npm run dev` when writing css/js
- `npm run build` when writing other code and no refresh required
- `php artisan storage:link` to link storage with public folder
- `php artisan optimize:clear`
- `chmod 777 storage/logs`

# For Cody style, Follow Laravel standard
- Coding Standard Guideline: https://spatie.be/guidelines/laravel-php
- Laravel Documentation: https://laravel.com/docs/10.x
- Livewire Documentation: https://livewire.laravel.com/docs

# Used Packages
## PHP
- https://github.com/spatie/laravel-permission
- https://github.com/spatie/laravel-activitylog
- https://github.com/spatie/laravel-medialibrary
- https://github.com/opcodesio/log-viewer
- https://wire-elements.dev/pro

## JS
- https://github.com/pqina/filepond
- https://github.com/Choices-js/Choices

## CSS
- https://github.com/twbs/bootstrap

## Icons
- https://fonts.google.com/icons

## Build Tool
- https://github.com/vitejs/vite
- https://github.com/laravel/vite-plugin
