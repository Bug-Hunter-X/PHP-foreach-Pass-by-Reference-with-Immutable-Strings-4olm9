```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $result[] = strtolower($value);
    } else {
      $result[] = $value; // Handle non-string values appropriately
    }
  }
  return $result;
}

$data = ['apple', 'Banana', 'Orange'];
$processedData = processData($data);
print_r($processedData); // Output: Array ( [0] => apple [1] => banana [2] => orange )
```