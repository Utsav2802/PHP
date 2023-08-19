<?php
$a = array(
  array(
    'id' => 8057,
    'first_name' => 'Krut',
    'last_name' => 'Akbari',
  ),

  array(
    'id' => 8061,
    'first_name' => 'Utsav',
    'last_name' => 'Sheth',
  ),

  array(
    'id' => 8066,
    'first_name' => 'Shree',
    'last_name' => 'Ranpariya',
  )
);

$first_names = array_column($a, 'first_name');
print_r($first_names);
?>