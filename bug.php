```php
function foo(int $a, int $b): int {
  return $a / $b;
}

$result = foo(10, 0);
echo $result; // Causes a division by zero error
```