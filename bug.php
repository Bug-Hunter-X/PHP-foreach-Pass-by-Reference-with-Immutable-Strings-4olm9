```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_string($value)) {
      $value = strtolower($value);
    }
  }
  return $data;
}

$data = ['apple', 'Banana', 'Orange'];
$processedData = processData($data);
print_r($processedData); // Output: Array ( [0] => apple [1] => banana [2] => orange )

//The bug is the usage of pass by reference in the foreach loop with strings. 
//Strings are immutable in PHP, so modifying the $value variable inside the loop doesn't change the original array elements.
//This is a subtle bug as the code appears to work correctly, but doesn't change the original values
```