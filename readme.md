## Hookah integration in php App
This is an example [hookah](https://github.com/younginnovations/hookah) integration with custom php app.

### Install

* Clone repo - `git clone https://github.com/manishgs/hookah-integration.git`

* Change directory - `cd hookah-integration`

* Install app dependencies -  `composer install`

* Copy .env-example to .env file - `cp .env-example .env`

* Change directory - `cd public` 

* Serve app - `php -S localhost:8000` 


### Run test
* `cd hookah-integration`
* `./vendor/bin/phpunit`

### Run tests faster
* `./vendor/bin/paratest -f --colors -m 2 -p 4 tests` 

### Configuration
* you can change base URL at `test\Smoke\BaseTestCase.php`
* For more configuration [Read here] (https://github.com/younginnovations/hookah#settings)

### Packages

This application uses following packages:

* [League Route](http://route.thephpleague.com/) - for Routing

* [PHP dotenv] (https://github.com/vlucas/phpdotenv) - for loading environment variables

