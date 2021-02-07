# Timetravel

Simple time travel class

```php
 $time = new DieterCoopman\TimeTravel\TimeTravel(new DateTime());
```
or
```php
$time = new DieterCoopman\TimeTravel\TimeTravel(Carbon::now());
```
or
```php
$time = new DieterCoopman\TimeTravel\TimeTravel('2021-01-01');
```

Travel to the past 

```php
$time->travel('5 years')->back();
```
Travel to the future 

```php
$time->travel('5 years')->forth();
```

Installation 

```shell
composer require dietercoopman/timetravel
```
