Randomizer
==========

Declare `randomizer.php` like any other class.
```php
include_once('randomizer.php');
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
