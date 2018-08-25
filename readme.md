# Laravel 5 Popularity

Based on [marcanuy/popularity](https://github.com/marcanuy/popularity)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require sweeeeep/l5popularity
```

## Updating your Eloquent Models
Your model should use the Popularable traits, which has method `hit()` that you need use

``` php
  <?php
  
    use Sweeeeep\Popularity\Popularable;
    
    class Post extends Model
    {
      use Popularable;
      
    }
```

## Usage
It makes use of Eloquent's [polymorphic relations](https://laravel.com/docs/5.5/eloquent-relationships#polymorphic-relations) , so each tracked model has its own stats.

### Tracking Hits
For each model instance that has already been saved into the db (or already has an id), call hit() method to increase count for each time frame, e.g. in routes.php each time a post or an article is viewed, or an Eloquent event is fired.
``` php
$post = Post::find(1);
$post->hit();
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sweeeeep/l5popularity.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sweeeeep/l5popularity.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/sweeeeep/l5popularity/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/145933570/shield

[link-packagist]: https://packagist.org/packages/sweeeeep/l5popularity
[link-downloads]: https://packagist.org/packages/sweeeeep/l5popularity
[link-travis]: https://travis-ci.org/sweeeeep/l5popularity
[link-styleci]: https://styleci.io/repos/145933570
