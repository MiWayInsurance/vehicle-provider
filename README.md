Vehicle Provider
================

Vehicle provider for [Faker](https://github.com/fzaninotto/Faker).

## Usage
```php
$faker = Faker\Factory::create();
$faker->addProvider(new \MiWay\Faker\VehicleProvider($faker));

//Get a random make and model (e.g: 'Ford Fiesta')
$faker->makeModel;
```