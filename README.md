Randomizer
==========
You can see a live demo [here](http://semscenter.com/randomizer)

Declare `randomizer.php` like any other class.
```php
include_once('randomizer.php');
```
Make a new Randomizer class. We will use `$randomizer`.
```php
$randomizer = new Randomizer;
```

randomArray($array)
--

Get random object out of array.

Example:

```php
$myArray = array(
  'foo',
  'bar',
  'foobar',
);
$rand = $randomizer -> randomArray($myArray);
```
