# Please readme for project installation guide.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Author

-   Name    : Adam Arnap
-   Email   : adamarnap0117@gmail.com
-   Phone/Wa: +(62)813-9034-0376
-   Github  : https://github.com/adamarnap/
-   Linkedin: https://www.linkedin.com/in/adam-arnap-bb6987237
-   Portofolio : https://www.canva.com/design/DAGlVFxVmFs/9Wob1TYb-MJVSTxHapkatA/edit?utm_content=DAGlVFxVmFs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton


## Requirements

-   Laravel 11.x (PHP > 8.1)
-   My SQL > 8.0
-   NodeJS > 14
-   Composer

## How to install

### Clone Repository

open your terminal, go to the directory that you will install this project, then run the following command:

```bash
git clone "https://github.com/adamarnap/pokemon-diskominfo"

cd pokemon-diskominfo
```

### Install packages

Install vendor using composer

```bash
composer update
```

Install node module using npm

```bash
npm install
```

### Configure .env

Copy .env.example file

```bash
cp .env.example .env
```

Then run the following command :

```php
php artisan key:generate
```
### Migrate Data

create an empty database with mysql 8.x version, then setup that fresh db at your .env file, then run the following command to generate all tables and seeding dummy data:

```php
php artisan migrate:fresh --seed
```

### Fetch Data Pokemon From API, and save to database
Fetching data from Pokemon API *API used: https://pokeapi.co/api/v2/pokemon/* and saving it to the database. To fetch data and save it to the database, you need to run a laravel command on the terminal, namely by running the following command:
```command
php artisan fetch:pokemon
```
### Public Disk
To make these files accessible from the web, you should create a symbolic link from public/storage to storage/app/public.
To create the symbolic link, you may use the storage:link Artisan command:

```php
php artisan storage:link
```

### Running Application

To serve the laravel app, you need to run the following command in the project director (This will serve your app, and give you an adress with port number 8000 or etc)

-   **Note: You need run the following command into new terminal tab**

```php
php artisan serve
```

*For development*
```php
npm run dev
```
*For deployment*
```php
npm run build
```

<!-- 
-   **Command websocket**

```php
php artisan reverb:start
```

-   **Command php worker**

```php
php artisan queue:work
```

-   **Command Running Laravel Scheduler**

```php
php artisan schedule:run
```


-   **Command Running CronJob In WSL**

```php
cd /mnt/d/Development/laragon/www/dialogia.ai && php artisan schedule:run
``` -->

<!-- Running vite

-   **Note: You need run the following command into new terminal tab** -->

Running Clear Cache dll
```bash
php artisan optimize:clear
php artisan config:clear
php artisan cache:clear
php artisan config:cache
```

-   **Note: You need run the following command into new terminal tab**

```bash
npm run build
```

Clear cache

```bash
php artisan optimize:clear
```

Access from public not found 404

```bash
sudo a2enmod rewrite
sudo service apache2 restart
AllowOverride All
```

## Email Test

MailHog is an email testing tool for developers.

-   Inbox : --
-   SMTP : --

## VS Code Extension

-   code --list-extensions | xargs -L 1 echo code --install-extension (UNIX)
-   code --list-extensions | % { "code --install-extension $\_" } (Windows)

> -   code --install-extension ahinkle.laravel-model-snippets
> -   code --install-extension amiralizadeh9480.laravel-extra-intellisense
> -   code --install-extension austenc.laravel-blade-spacer
> -   code --install-extension bmewburn.vscode-intelephense-client
> -   code --install-extension calebporzio.better-phpunit
> -   code --install-extension codingyu.laravel-goto-view
> -   code --install-extension formulahendry.auto-close-tag
> -   code --install-extension MehediDracula.php-namespace-resolver
> -   code --install-extension ms-vscode.sublime-keybindings
> -   code --install-extension neilbrayfield.php-docblocker
> -   code --install-extension onecentlin.laravel-blade
> -   code --install-extension onecentlin.laravel5-snippets
> -   code --install-extension SonarSource.sonarlint-vscode
> -   code --install-extension Codeium.codeium

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
