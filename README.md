# Project Blog Laravel
project blog laravel is used for learning laravel purpose only that used by student of summerschool uin maliki malang. this project is created step by step at my laravel module, i prefer use this project because i think its very basic step to learn background of laravel development. if you wanna test this project feel free to clone and follow bellow step. ^_^

## Purposes

to educate all laravel developer espessially student of `summerschool uin malang 2017`

## Prerequisites

    * Laravel Framework
    * PHP Programming Language
    * Apache Server
    * Mysql Database
    * PHP Programming Language
    * Composer
    * Git

## How To Install

### Clone This Project

type this command to your cli, make sure you have install git

  `git clone https://github.com/summerschooluinmalang/buku-memasak-laravel.git`


### Install or Update Project

type this command to your cli, make sure you have install composer

  `composer install`
  otherwise
  `composer update`
  
### Set Your Database Config at .env File

open .env file or if its doesnt exist, please duplicate .env.example file to .env file and set configuration database like bellow.

```
DB_CONNECTION=mysql  
DB_HOST=localhost 
DB_PORT=3306  
DB_DATABASE=blog  #this belongs to your database name
DB_USERNAME=root #this belongs to your database username   
DB_PASSWORD=root  #this belongs to your database password
```

### Migrate Table

type this command to your cli, if any error to this step, its mean you are failed config database at above step

  `php artisan migrate:install`

### Seeding

type this command to your cli, make sure the migrate proses was successful

  `php artisan db:seed`


## How To Run

type this artisan command

  `php artisan serve`


enjoy the project ^_^ . if you have any question, feel free to contact me.

regards @billxcode


