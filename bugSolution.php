function foo(array $arr): int {
  $count = 0;
  foreach ($arr as $val) {
    if ($val !== null) {
      $count++;
    } else {
      // Handle NULL as needed.  Options include:
      // 1. Skip NULL (current solution)
      // 2. Throw an exception: throw new InvalidArgumentException('Array contains NULL values.');
      // 3. Assign a default value: $count += 1; // treat null as a value.
    }
  }
  return $count;
}

$result = foo([1,2,3,null]);
echo $result; // Outputs 3.