

clone the repository

    git clone https://github.com/segunemmanuel/dating_app_.git

Switch to the repo folder

    cd laravel-realworld-example-app

    Install all the dependencies using composer

    composer install

    Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env



    Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


    **TL;DR command list**

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 