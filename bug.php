function foo(array $arr): int {
  foreach ($arr as $val) {
    if ($val === null) {
      return 0; // Incorrect: Should handle NULL values appropriately.
    }
  }
  return count($arr);
}

$result = foo([1,2,3,null]);
echo $result; // Outputs 0. Expected behaviour would be handling the null value, perhaps by skipping it, or throwing an exception.