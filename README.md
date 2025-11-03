# ProgFeeds

## Development Environment
The tools and their versions used in development were:
- PHP 8.4
- Laravel 12
- Laravel Heard 1.22.3
- PHP Storm 2025.2.4

![Image-04-PhpStorm](images/Image-04-PhpStorm.png)

Check the PHP and Laravel installer versions with `php -v` and `laravel -v` in the terminal/cmd.

![Image-01-cmd](images/Image-01-cmd.png)

## Project Execution
Open Laravel Heard and go to Sites -> PHP-Laravel-ProgFeeds.test -> General -> URL
and verify execution in the browser.

![Image-02-Laravel Heard](images/Image-02-LaravelHeard-URL.png)

![Image-03-Chrome-URL](images/Image-03-Chrome-URL.png)

Add the project directory to the Sites section in Laravel Heard if necessary.


## Development
1. Create home page:
- In **resources/views**: create the file *home.blade.php* for the home page.
- In **routes/web.php**: map the route *"/laravel"* to the *welcome* page and the route *"/"* to the *home* page.

![Image-05-Home](images/Image-05-Home-1.png)

2. Create `ProgFeedsController`:

* In **app/Http/Controllers**: New -> Laravel -> Controller and "ProgFeeds"

![Image-06-ProgFeedsController](images/Image-06-ProgFeedsController-Create-1.png)

![Image-07-ProgFeedsController](images/Image-07-ProgFeedsController-Create-2.png)

* In **app/Http/Controllers/ProgFeedsController**: implement the index method to return the *home* view.
* In **app/routes/web.php**: replace the callback function with a reference to the `ProgFeedsController` class and 
its index method: `Route::get('/', [ProgFeedsController::class, 'index']);`


## References 
Laravel - Getting Started:
https://laravel.com/learn/getting-started-with-laravel

Learn Laravel from Scratch [FULL BOOTCAMP COURSE]:
https://www.youtube.com/watch?v=MOLZOXqaomM
