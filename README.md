# Laravel Pipedrive API wrapper 

Forked from [LasseRafn/laravel-pipedrive](https://github.com/LasseRafn/laravel-pipedrive)

## Installation

1. Require using composer

2. (For laravel **5.4 and below**) Add the PipedriveServiceProvider to your ````config/app.php```` providers array.

``` php
'providers' => [
    \Guiligan\Pipedrive\PipedriveServiceProvider::class,
]
```

3. Publish config file.

``` bash
php artisan vendor:publish --provider "Guiligan\Pipedrive\PipedriveServiceProvider"
```

## Usage

### Create Pipedrive Instance

``` php
$pipedrive = new \Guiligan\Pipedrive\Pipedrive($APIKEY); // or set the api key in the config/pipedrive.php file.
```

To find your API key you must login to Pipedrive and navigate to Settings -> Personal -> Api (/settings#api)

### Get all Persons

``` php
$pipedrive->persons()->all(); // Returns a collection of Person models.
```

### Find Person by ID

``` php
$pipedrive->persons()->find(1); // Returns a Person model.
```

### Get a list of Activities that are not done

Filters consist of an array of arrays. The first parameter is included fields, leave it at `null` to keep the default.

``` php
$pipedrive->activities()->all(null, [ [ 'done' => 0 ] ]);
```

(Later versions will switch to a single array key => value).

## Supported endpoints

... Todo

## Testing

... Todo

## [Contributors](https://github.com/guiligan/laravel-pipedrive/graphs/contributors)
